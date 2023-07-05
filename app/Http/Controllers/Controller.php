<?php

namespace App\Http\Controllers;

use App\Models\ImageVariantModel;
use App\Models\ProductAttribute;
use App\Models\ProductAttributesModel;
use App\Models\ProductRelatedModel;
use App\Models\ProductsModel;
use App\Models\ProductValue;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * ADD Images product
     **/
    public function add_img_product ($request, $product_infor_id)
    {
        try {
            if($request->hasFile('images')) {
                $file = $request->file('images');
                foreach($file as $value){
                    $image_name = 'upload/product/img/'.Str::random(40);
                    $ext = strtolower($value->getClientOriginalExtension());
                    $image_full_name = $image_name.'.'.$ext;
                    $path = 'upload/product/img';
                    $value->move($path,$image_full_name);
                    $image_invest = new ImageVariantModel([
                        'product_infor_id' => $product_infor_id,
                        'image' => $image_full_name,
                    ]);
                    $image_invest->save();
                }
                return true;
            }
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function add_and_update_attribute_product ($data_attribute, $product_infor,$related)
    {
        foreach ($data_attribute as $value){
            $is_featured_products = 0;
            if ($value['featured_products'] == 'on') {
                $is_featured_products = 1;
            }
            $price = str_replace(",", "", $value['price'] ?? 0);
            $promotional_price = str_replace(",", "", $value['promotional_price']??0);
            if (isset($value['attribute_id'])){
                $product = ProductsModel::find($value['attribute_id']);
                $product->product_infor_id = $product_infor->id;
                $product->name = $value['name'];
                $product->slug = Str::slug($value['name']);
                $product->price = $price;
                $product->promotional_price = $promotional_price;
//                $product_attribute->quantity = $color->code;
                $product->own_parameter = $value['own_parameter'];
                $product->specifications = $value['specifications'];
                $product->is_featured_products = $is_featured_products;
                $product->save();
            }else{
                $product = new ProductsModel([
                    'product_infor_id' => $product_infor->id,
                    'name' => $value['name'],
                    'slug' => Str::slug($value['name']),
                    'price' => $price,
                    'promotional_price'=> $promotional_price,
//                    'quantity' => $color->name,
                    'own_parameter' => $value['own_parameter'],
                    'specifications' => $value['specifications'],
                    'is_featured_products' => $is_featured_products,
                ]);
                $product->save();
            }
            if (count($value['data'])){
                foreach ($value['data'] as $item){
                    if (isset($item['value_id'])){
                        $product_attribute = ProductAttributesModel::find($item['value_id']);
                        $product_attribute->name_color = $item['color'];
                        $product_attribute->price = isset($item['price']) ? str_replace(",", "", $item['price']) : 0;
                        $product_attribute->promotional_price = isset($item['promotion_price']) ? str_replace(",", "", $item['promotion_price']) : 0;
                        $product_attribute->save();
                    }else{
                        $product_attribute = new ProductAttributesModel([
                            'product_id' => $product->id,
                            'name_color' => $item['color'],
                            'price' => isset($item['price']) ? str_replace(",", "", $item['price']) : 0,
                            'promotional_price' => isset($item['promotion_price']) ? str_replace(",", "", $item['promotion_price']) : 0,
                        ]);
                        $product_attribute->save();
                    }
                }
            }
        }
        if (isset($related)){
            foreach ($related as $item){
                $prouct_related = new ProductRelatedModel([
                    'product_id' => $item['product_id'],
                    'product_infor_id' => $product_infor->id,
                ]);
                $prouct_related->save();
            }
        }
        return true;
    }
}
