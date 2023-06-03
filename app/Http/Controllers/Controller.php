<?php

namespace App\Http\Controllers;

use App\Models\ImageVariantModel;
use App\Models\ProductAttributesModel;
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
                if (isset($value['attribute_id'])){
                    $product_attribute = ProductAttributesModel::find($value['attribute_id']);
//                    $product_attribute->color_name = $color->name;
//                    $product_attribute->color_code = $color->code;
                    $product_attribute->save();
                }else{
                    $product_attribute = new ProductAttributesModel([
                        'product_id' => $product->id,
                        'name_product_type' => $value['name_product_type'],
                        'parameter_one' => $value['parameter_one'],
                        'parameter_two' => $value['parameter_two'],
                        'parameter_three' => $value['parameter_three'],
                        'parameter_four' => $value['parameter_four'],
                        'specifications' => $value['specifications']
                    ]);
                    $product_attribute->save();
                }

                if (count($value['data'])) {
                    foreach ($value['data'] as $item){
                        $product_value = new ProductValue([
                            'product_id' => $product->id,
                            'attribute_id' => $product_attribute->id,
                            'name_color' => $item['color'],
                            'price' => isset($item['price']) ? str_replace(",", "", $item['price']) : $product->price,
                            'promotional_price' => isset($item['promotion_price']) ? str_replace(",", "", $item['promotion_price']) : $product->promotional_price,
                            'quantity' => str_replace(",", "", $item['quantity']),
                            'sku' => $item['sku']
                        ]);
                        $product_value->save();
                    }

                }
            }
        }
        return true;
    }
}
