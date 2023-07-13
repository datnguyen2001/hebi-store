<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\FlashSaleModel;
use App\Models\ImageVariantModel;
use App\Models\ProductAttributesModel;
use App\Models\ProductInformationModel;
use App\Models\ProductRelatedModel;
use App\Models\ProductsModel;
use App\Models\ProductValue;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function category($status)
    {
        $checkCate = $this->checkStatus($status);
        $cate = CategoryModel::where('display', 1)->where('type', $checkCate['type'])->where('parent_id', 0)->get();
        $product_infor = ProductInformationModel::where('type_product', $checkCate['type'])->pluck('id');
        $product = ProductsModel::join('product_attributes', 'products.id', '=', 'product_attributes.product_id')
            ->orderBy('product_attributes.promotional_price', 'desc')
            ->select('products.*')
            ->whereIn('product_infor_id', $product_infor)
            ->paginate(20);
        foreach ($product as $item) {
            $flash_sale = FlashSaleModel::where('product_id',$item->id)->first();
            $item->infor = ProductInformationModel::find($item->product_infor_id);
            $item->type_product = ProductsModel::where('product_infor_id', $item->product_infor_id)->get();
            $item->price = ProductAttributesModel::where('product_id', $item->id)->first()->price;
            if ($flash_sale){
                $item->promotional_price = $flash_sale->price_sale;
                $item->time_end = $flash_sale->time_end;
                $item->type_sale = 1;
            }else{
                $item->promotional_price = ProductAttributesModel::where('product_id', $item->id)->first()->promotional_price;
                $item->type_sale = 0;
            }
        }
        $ram = ProductInformationModel::select('parameter_one')->where('type_product', $checkCate['type'])->distinct()->get();
        $rom = ProductsModel::select('own_parameter')->whereIn('product_infor_id', $product_infor)->distinct()->get();
        $screen = ProductInformationModel::select('parameter_two')->where('type_product', $checkCate['type'])->distinct()->get();
        $intended_use = ProductInformationModel::select('parameter_three')->where('type_product', $checkCate['type'])->distinct()->get();
        $chip = ProductInformationModel::select('parameter_four')->where('type_product', $checkCate['type'])->distinct()->get();
        $name = null;
        $slug = null;
        $name_cate = $checkCate['name_cate'];
        $type_product = $checkCate['type'];
        return view('web.category.index', compact('cate', 'name_cate', 'status', 'name', 'product','ram','rom','screen',
            'intended_use','chip','type_product','slug'));
    }

    public function productCate($status, $name)
    {
        $checkCate = $this->checkStatus($status);
        $id_cate = CategoryModel::where('name', $name)->where('display', 1)->where('type', $checkCate['type'])->first();
        $cate = CategoryModel::where('display', 1)->where('type', $checkCate['type'])->where('parent_id', $id_cate->id)->get();
        $parent_id = CategoryModel::where('display', 1)->where('type', $checkCate['type'])->where('parent_id', $id_cate->id)->pluck('id');
        $product_infor = ProductInformationModel::where('type_product', $checkCate['type'])->whereIn('category_id',$parent_id)->pluck('id');
        $product = ProductsModel::join('product_attributes', 'products.id', '=', 'product_attributes.product_id')
            ->orderBy('product_attributes.promotional_price', 'desc')
            ->select('products.*')
            ->whereIn('product_infor_id', $product_infor)
            ->paginate(20);
        foreach ($product as $item) {
            $flash_sale = FlashSaleModel::where('product_id',$item->id)->first();
            $item->infor = ProductInformationModel::find($item->product_infor_id);
            $item->type_product = ProductsModel::where('product_infor_id', $item->product_infor_id)->get();
            $item->price = ProductAttributesModel::where('product_id', $item->id)->first()->price;
            if ($flash_sale){
                $item->promotional_price = $flash_sale->price_sale;
                $item->time_end = $flash_sale->time_end;
                $item->type_sale = 1;
            }else{
                $item->promotional_price = ProductAttributesModel::where('product_id', $item->id)->first()->promotional_price;
                $item->type_sale = 0;
            }
        }
        $ram = ProductInformationModel::select('parameter_one')->where('type_product', $checkCate['type'])->distinct()->get();
        $rom = ProductsModel::select('own_parameter')->whereIn('product_infor_id', $product_infor)->distinct()->get();
        $screen = ProductInformationModel::select('parameter_two')->where('type_product', $checkCate['type'])->distinct()->get();
        $intended_use = ProductInformationModel::select('parameter_three')->where('type_product', $checkCate['type'])->distinct()->get();
        $chip = ProductInformationModel::select('parameter_four')->where('type_product', $checkCate['type'])->distinct()->get();
        $name_cate = $checkCate['name_cate'];
        $type_product = $checkCate['type'];
        $slug = null;
        return view('web.category.index', compact('cate', 'name_cate', 'status', 'name','type_product','ram','rom','screen',
            'intended_use','chip','product','slug'));
    }

    public function productCateDetail($status, $name, $slug)
    {
        $checkCate = $this->checkStatus($status);
        $id_cate = CategoryModel::where('name', $name)->where('display', 1)->where('type', $checkCate['type'])->first();
        $cate = CategoryModel::where('display', 1)->where('type', $checkCate['type'])->where('parent_id', $id_cate->id)->get();
        $parent_id = CategoryModel::where('display', 1)->where('type', $checkCate['type'])->where('slug', $slug)->first();
        $product_infor = ProductInformationModel::where('type_product', $checkCate['type'])->where('category_id',$parent_id->id)->pluck('id');
        $product = ProductsModel::join('product_attributes', 'products.id', '=', 'product_attributes.product_id')
            ->orderBy('product_attributes.promotional_price', 'desc')
            ->select('products.*')
            ->whereIn('product_infor_id', $product_infor)
            ->paginate(20);
        foreach ($product as $item) {
            $flash_sale = FlashSaleModel::where('product_id',$item->id)->first();
            $item->infor = ProductInformationModel::find($item->product_infor_id);
            $item->type_product = ProductsModel::where('product_infor_id', $item->product_infor_id)->get();
            $item->price = ProductAttributesModel::where('product_id', $item->id)->first()->price;
            if ($flash_sale){
                $item->promotional_price = $flash_sale->price_sale;
                $item->time_end = $flash_sale->time_end;
                $item->type_sale = 1;
            }else{
                $item->promotional_price = ProductAttributesModel::where('product_id', $item->id)->first()->promotional_price;
                $item->type_sale = 0;
            }
        }
        $ram = ProductInformationModel::select('parameter_one')->where('type_product', $checkCate['type'])->distinct()->get();
        $rom = ProductsModel::select('own_parameter')->whereIn('product_infor_id', $product_infor)->distinct()->get();
        $screen = ProductInformationModel::select('parameter_two')->where('type_product', $checkCate['type'])->distinct()->get();
        $intended_use = ProductInformationModel::select('parameter_three')->where('type_product', $checkCate['type'])->distinct()->get();
        $chip = ProductInformationModel::select('parameter_four')->where('type_product', $checkCate['type'])->distinct()->get();
        $name_cate = $checkCate['name_cate'];
        $type_product = $checkCate['type'];
        return view('web.category.index', compact('cate', 'name_cate', 'status', 'name','type_product','ram','rom','screen',
            'intended_use','chip','product','slug'));
    }


    public function detailProduct($slug)
    {
        $product = ProductsModel::where('slug', $slug)->first();
        if (empty($product)) {
            return back()->with(['error' => 'Sản phẩm không tồn tại']);
        }
        $image_product = ImageVariantModel::where('product_infor_id', $product->product_infor_id)->get();
        $product_infor = ProductInformationModel::where('id', $product->product_infor_id)->first();
        $list_product = ProductsModel::where('product_infor_id', $product_infor->id)->get();
        foreach ($list_product as $value) {
            $value->price = ProductAttributesModel::where('product_id', $value->id)->first()->promotional_price;
        }
        $product_attribute = ProductAttributesModel::where('product_id', $product->id)->get();
        $product_related = ProductRelatedModel::where('product_infor_id',$product->product_infor_id)->get();
        foreach ($product_related as $item){
            $item->product = ProductsModel::find($item->product_id);
            $item->infor = ProductInformationModel::find($item->product->product_infor_id);
            $item->type_product = ProductsModel::where('product_infor_id',$item->product->product_infor_id)->get();
            $item->price = ProductAttributesModel::where('product_id',$item->product->id)->first()->price;
            $item->promotional_price = ProductAttributesModel::where('product_id',$item->product->id)->first()->promotional_price;
        }
        $category = CategoryModel::find($product_infor->category_id);
        $name_category = CategoryModel::find($category->parent_id);
        $w_title = 'Chi tiết sản phẩm';
        return view('web.product.detail-product', compact('w_title', 'product', 'product_attribute', 'product_infor',
            'image_product', 'list_product', 'name_category','product_related'));
    }

    public function filterPhone(Request $request)
    {
        try {
            if ($request->sort == 1){
                $sort = ['product_attributes.promotional_price', 'asc'];
            }else if ($request->sort == 2){
                $sort = ['product_attributes.promotional_price', 'desc'];
            }else{
                $sort = ['product_attributes.created_at', 'desc'];
            }
            $product_infor = ProductInformationModel::query();
            $product_infor = $this->filterProduct($product_infor, $request);
            $product_infor = $product_infor->where('type_product',$request->type_product)->where('display', 1)->pluck('id');
            if ($request->parameter_five) {
                $product = ProductsModel::join('product_attributes', 'products.id', '=', 'product_attributes.product_id')
                    ->orderBy($sort[0], $sort[1])
                    ->select('products.*')
                    ->whereIn('product_infor_id', $product_infor)->where('own_parameter',$request->parameter_five)
                    ->paginate(20);
            }else{
                $product = ProductsModel::join('product_attributes', 'products.id', '=', 'product_attributes.product_id')
                    ->orderBy($sort[0], $sort[1])
                    ->select('products.*')
                    ->whereIn('product_infor_id', $product_infor)
                    ->paginate(20);
            }

            foreach ($product as $item) {
                $flash_sale = FlashSaleModel::where('product_id',$item->id)->first();
                $item->infor = ProductInformationModel::find($item->product_infor_id);
                $item->type_product = ProductsModel::where('product_infor_id', $item->product_infor_id)->get();
                $item->price = ProductAttributesModel::where('product_id', $item->id)->first()->price;
                if ($flash_sale){
                    $item->promotional_price = $flash_sale->price_sale;
                    $item->time_end = $flash_sale->time_end;
                    $item->type_sale = 1;
                }else{
                    $item->promotional_price = ProductAttributesModel::where('product_id', $item->id)->first()->promotional_price;
                    $item->type_sale = 0;
                }
            }
            $view = view('web.category.items-product', compact('product'))->render();
            return response()->json(['status' => true, 'prop' => $view]);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
