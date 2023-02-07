<?php

namespace App\Http\Controllers;

use App\Models\ImageVariantModel;
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
    public function add_img_product ($request, $product_id)
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
                        'product_id' => $product_id,
                        'src' => $image_full_name,
                        'extension' => $ext
                    ]);
                    $image_invest->save();
                }
                return true;
            }
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function add_and_update_attribute_product ($data, $product)
    {
        if (count($data)){
            foreach ($data as $value){
                $product_value = new ProductValue([
                    'product_id' => $product->id,
                    'name_value' => $value['size'],
                    'price' => isset($value['price']) ? str_replace(",", "", $value['price']) : $product->price,
                    'promotional_price' => isset($value['promotion_price']) ? str_replace(",", "", $value['promotion_price']) : $product->promotional_price,
                    'quantity' => str_replace(",", "", $value['quantity']),
                    'sku' => $value['sku']
                ]);
                $product_value->save();
            }
        }
        return true;
    }
}
