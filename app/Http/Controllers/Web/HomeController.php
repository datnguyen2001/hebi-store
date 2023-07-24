<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\CategoryModel;
use App\Models\FlashSaleModel;
use App\Models\IntroduceModel;
use App\Models\ProductAttributesModel;
use App\Models\ProductInformationModel;
use App\Models\ProductReviewsModel;
use App\Models\ProductsModel;
use App\Models\ProductValue;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $banner_top = BannerModel::where('display',1)->where('location',1)->orderBy('index','asc')->limit(5)->get();
        $banner_top_right = BannerModel::where('display',1)->where('location',2)->orderBy('index','asc')->limit(3)->get();
        $banner_two = BannerModel::where('display',1)->where('location',3)->orderBy('index','asc')->limit(1)->first();
        $banner_hot_sale = BannerModel::where('display',1)->where('location',4)->orderBy('index','asc')->limit(1)->first();
        $category_product = CategoryModel::where('display',1)->where('parent_id',0)->orderBy('location','asc')->get();
        $category = CategoryModel::where('display',1)->orderBy('location','asc')->get();
        $product_phone = $this->item_product(1);
        $product_tablet = $this->item_product(2);
        $product_laptop = $this->item_product(3);
        $product_watch = $this->item_product(4);
        $product_home = $this->item_product(5);
        $product_accessory = $this->item_product(6);
        $product_sound = $this->item_product(7);
        $flash_sale = FlashSaleModel::whereDate('time_start', '<=', Carbon::now())->whereDate('time_end', '>=', Carbon::now())->get();
        foreach ($flash_sale as $item){
            $item->product = ProductsModel::find($item->product_id);
            $item->infor = ProductInformationModel::find($item->product->product_infor_id);
            $item->type_product = ProductsModel::where('product_infor_id',$item->infor->id)->get();
            $item->price = ProductAttributesModel::where('product_id',$item->product_id)->first()->price;
            $star = ProductReviewsModel::where('product_id', $item->product_id)->get();
            if (!$star->isEmpty()) {
                $total_score =  ProductReviewsModel::where('product_id', $item->product_id)->sum('star');
                $total_votes = count($star);
                $item->star = round($total_score/$total_votes, 1);
            }
        }
        return view('web.home.index', compact( 'banner_top','banner_top_right', 'banner_two','banner_hot_sale','product_phone',
            'category_product','category','flash_sale','product_tablet','product_laptop','product_watch','product_home','product_accessory',
            'product_sound'));
    }
}
