<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrderModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $titlePage = 'Trang chủ';
        $page_menu = null;
        $page_sub = null;
        return view('admin.index', compact('titlePage','page_menu','page_sub'));
    }

    public function dashboard(Request $request)
    {
        if (User::checkUserRole(1)) {
            $titlePage = 'Tổng quan';
            $page_menu = 'dashboard';
            $page_sub = null;
            /**
             * Danh mục sản phẩm được mua nhiều nhất
             **/
            $sectors = [];
            for ($i = 1; $i < 8; $i++) {
                $count = DB::table('order_item')
                    ->join('product_attributes', 'order_item.product_attributes_id', '=', 'product_attributes.id')
                    ->join('products', 'product_attributes.product_id', '=', 'products.id')
                    ->join('product_information', 'products.product_infor_id', '=', 'product_information.id')
                    ->join('order', 'order_item.order_id', '=', 'order.id')
                    ->select('order_item.id')
                    ->where('product_information.type_product', $i);
                if ($request->get('date_top_category')){
                    $count = $count->where('order_item.created_at', 'LIKE', $request->get('date_top_category') . '%');
                }
                $count = $count->where('order.status', 3);
                $count = $count->count();
                $sectors[$i] = $count;
            }

            /**
             * Sản phẩm trong danh mục được mua nhiều nhất
             **/
            $product_top = DB::table('order_item')
                ->join('product_attributes', 'order_item.product_attributes_id', '=', 'product_attributes.id')
                ->join('products', 'product_attributes.product_id', '=', 'products.id')
                ->join('product_information', 'products.product_infor_id', '=', 'product_information.id')
                ->join('order', 'order_item.order_id', '=', 'order.id')
                ->select('product_information.type_product as LoaiSanPham', DB::raw('MAX(products.name) as TenSanPham'), DB::raw('COUNT(*) as SoLuong'));
            if ($request->get('date_top_product')){
                $product_top = $product_top->where('order_item.created_at', 'LIKE', $request->get('date_top_product') . '%');
            }
            $product_top = $product_top->where('order.status', 3);
            $product_top = $product_top->groupBy('product_information.type_product')
                ->orderBy('product_information.type_product')
                ->orderByDesc('SoLuong')
                ->get();

            /**
             * Doanh số theo tháng
             **/
            if ($request->get('date')){
                $monthYear = $request->get('date');
            }else{
                $monthYear = date('Y-m');
            }
            $firstDayOfMonth = Carbon::createFromFormat('Y-m', $monthYear)->startOfMonth();
            $lastDayOfMonth = $firstDayOfMonth->copy()->endOfMonth();
            $dailySalesData = [];
            $totalMonthlySales = 0;
            $currentDate = $firstDayOfMonth;
            while ($currentDate <= $lastDayOfMonth) {
                $dailySales = DB::table('order')
                    ->where('status', 3)
                    ->whereDate('created_at', $currentDate)
                    ->sum('total_money_order');
                $totalMonthlySales += $dailySales;
                $dailySalesData[$currentDate->format('Y-m-d')] = $dailySales ?: 0;
                $currentDate->addDay();
            }
            /**
             * Danh sách người mua hàng
             **/
            $listCustomers = DB::table('order')
                ->where('status', 3)
                ->whereIn('id', function ($query) {
                    $query->select(DB::raw('MIN(id)'))
                        ->from('order')
                        ->groupBy('phone');
                })
                ->count();

            $customers = DB::table('order')
                ->where('status', 3)
                ->select('phone', DB::raw('COUNT(*) as order_count'))
                ->groupBy('phone')
                ->havingRaw('COUNT(*) > 1')
                ->orderByDesc('order_count')
                ->get();

            $order_pending = OrderModel::where('status', 0)->count();
            $order_confirm = OrderModel::where('status', 1)->count();
            $order_delivery = OrderModel::where('status', 2)->count();
            $order_complete = OrderModel::where('status', 3)->count();
            $order_cancel = OrderModel::where('status', 4)->count();
            $return_refund = OrderModel::where('status', 5)->count();
            $order_all = OrderModel::count();
            $order_pending_money = OrderModel::where('status', 0)->sum('total_money_order');
            $order_confirm_money = OrderModel::where('status', 1)->sum('total_money_order');
            $order_delivery_money = OrderModel::where('status', 2)->sum('total_money_order');
            $order_complete_money = OrderModel::where('status', 3)->sum('total_money_order');
            $order_cancel_money = OrderModel::where('status', 4)->sum('total_money_order');
            $return_refund_money = OrderModel::where('status', 5)->sum('total_money_order');
            $order_all_money = OrderModel::sum('total_money_order');

            return view('admin.dashboard', compact('titlePage', 'page_sub', 'page_menu', 'sectors', 'product_top',
                'dailySalesData', 'listCustomers', 'customers', 'order_all', 'order_pending', 'order_confirm', 'order_delivery',
                'order_complete', 'order_cancel', 'order_pending_money', 'order_confirm_money', 'order_delivery_money',
                'order_complete_money', 'order_cancel_money', 'order_all_money','return_refund','return_refund_money','totalMonthlySales'));
        } else {
            return view('admin.error');
        }
    }

    public function customer(Request $request)
    {
        if (User::checkUserRole(1)) {
            $titlePage = 'Tổng quan';
            $page_menu = 'dashboard';
            $page_sub = null;
            $status = 1;
            $search = $request->key_search;
            $listData = DB::table('order as o1')
                ->select('o1.*', 'order_count')
                ->where('o1.status',3)
                ->join(DB::raw('(SELECT phone, COUNT(*) as order_count FROM `order` GROUP BY phone) as o2'), function ($join) {
                    $join->on('o1.phone', '=', 'o2.phone');
                })
                ->whereIn('o1.id', function ($query) {
                    $query->select(DB::raw('MIN(id)'))
                        ->from('order')
                        ->groupBy('phone');
                });
            if (!empty($search)) {
                $listData = $listData->where(function ($query) use ($search) {
                    $query->where('o1.phone', 'LIKE', '%' . $search . '%')
                        ->orWhere('o1.name', 'LIKE', '%' . $search . '%');
                });
            }
            $listData = $listData->paginate(20);

            return view('admin.client.index', compact('titlePage', 'page_sub', 'page_menu', 'listData', 'status'));
        } else {
            return view('admin.error');
        }
    }

    public function customerBuyMax(Request $request)
    {
        if (User::checkUserRole(1)) {
            $titlePage = 'Tổng quan';
            $page_menu = 'dashboard';
            $page_sub = null;
            $status = 2;
            $search = $request->key_search;
            $listData = DB::table('order')
                ->select('phone', DB::raw('COUNT(*) as order_count'))
                ->where('status',3)
                ->groupBy('phone')
                ->havingRaw('COUNT(*) > 1')
                ->orderByDesc('order_count');
            if (!empty($search)) {
                $listData->where(function ($query) use ($search) {
                    $query->where('phone', 'LIKE', "%$search%")
                        ->orWhere('name', 'LIKE', "%$search%");
                });
            }
            $listData = $listData->paginate(20);

            foreach ($listData as $item) {
                $order = OrderModel::where('phone', $item->phone)->first();
                $item->name = $order->name;
                $item->email = $order->email;
                $item->full_address = $order->full_address;
            }

            return view('admin.client.index', compact('titlePage', 'page_sub', 'page_menu', 'listData', 'status'));
        } else {
            return view('admin.error');
        }
    }
}
