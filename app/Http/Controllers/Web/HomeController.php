<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\IntroduceModel;
use App\Models\ProductAttributesModel;
use App\Models\ProductsModel;
use App\Models\ProductValue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $contact_infor = IntroduceModel::where('display',1)->where('type',0)->get();
        $policy = IntroduceModel::where('display',1)->where('type',1)->get();
        $other_infor = IntroduceModel::where('display',1)->where('type',0)->get();
        $banner = BannerModel::all();
        $phone = ProductsModel::where('type_product',1)->pluck('id');
        $product_phone = ProductAttributesModel::whereIn('product_id',$phone)->get();
        foreach ($product_phone as $value){
            $value->banner = ProductsModel::find($value->product_id)->banner;
            $value->name = ProductsModel::find($value->product_id)->name;
            $value->type_product = ProductAttributesModel::where('product_id',$value->product_id)->get();
            $value->price_item = ProductValue::where('product_id',$value->product_id)->where('attribute_id',$value->id)->first()->price;
            $value->promotional_price_item = ProductValue::where('product_id',$value->product_id)->where('attribute_id',$value->id)->first()->promotional_price;
        }
        return view('web.home.index', compact( 'contact_infor','policy','other_infor','banner','product_phone'));
    }
}
