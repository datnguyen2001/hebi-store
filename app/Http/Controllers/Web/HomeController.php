<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\CategoryModel;
use App\Models\IntroduceModel;
use App\Models\ProductAttributesModel;
use App\Models\ProductInformationModel;
use App\Models\ProductsModel;
use App\Models\ProductValue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $banner_top = BannerModel::where('display',1)->where('location',1)->orderBy('index','asc')->limit(5)->get();
        $banner_top_right = BannerModel::where('display',1)->where('location',2)->orderBy('index','asc')->limit(3)->get();
        $banner_two = BannerModel::where('display',1)->where('location',3)->orderBy('index','asc')->limit(1)->first();
        $banner_hot_sale = BannerModel::where('display',1)->where('location',4)->orderBy('index','asc')->limit(1)->first();
        $contact_infor = IntroduceModel::where('display',1)->where('type',0)->get();
        $policy = IntroduceModel::where('display',1)->where('type',1)->get();
        $other_infor = IntroduceModel::where('display',1)->where('type',0)->get();
        $cate_phone = CategoryModel::where('display',1)->where('type',1)->where('parent_id',0)->orderBy('location','asc')->get();
        $cate_tablet = CategoryModel::where('display',1)->where('type',2)->where('parent_id',0)->orderBy('location','asc')->get();
        $cate_watch = CategoryModel::where('display',1)->where('type',3)->where('parent_id',0)->orderBy('location','asc')->get();
        $cate_home = CategoryModel::where('display',1)->where('type',4)->where('parent_id',0)->orderBy('location','asc')->get();
        $cate_accessory = CategoryModel::where('display',1)->where('type',5)->where('parent_id',0)->orderBy('location','asc')->get();
        $cate_sound = CategoryModel::where('display',1)->where('type',6)->where('parent_id',0)->orderBy('location','asc')->get();
        $category = CategoryModel::where('display',1)->orderBy('location','asc')->get();
        $phone_infor = ProductInformationModel::where('type_product',1)->pluck('id');
        $product_phone = ProductsModel::whereIn('product_infor_id',$phone_infor)->where('is_featured_products',1)->limit(10)->get();
        foreach ($product_phone as $value){
            $value->parameter = ProductInformationModel::find($value->product_infor_id);
            $value->image = ProductInformationModel::find($value->product_infor_id)->image;
            $value->type_product = ProductsModel::where('product_infor_id',$value->product_infor_id)->get();
            $value->price_item = ProductAttributesModel::where('product_id',$value->id)->first()->price;
            $value->promotional_price_item = ProductAttributesModel::where('product_id',$value->id)->first()->promotional_price;
        }
        return view('web.home.index', compact( 'contact_infor','policy','other_infor','banner_top','banner_top_right',
            'banner_two','banner_hot_sale','product_phone','cate_phone','cate_tablet','cate_watch','cate_home','cate_accessory',
            'cate_sound','category'));
    }
}
