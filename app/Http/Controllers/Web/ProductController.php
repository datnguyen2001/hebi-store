<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ImageVariantModel;
use App\Models\ProductAttributesModel;
use App\Models\ProductsModel;
use App\Models\ProductValue;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detailProduct($id)
    {
        $product_attribute = ProductAttributesModel::where('id', $id)->first();
        if (empty($product_attribute)) {
            return back()->with(['error' => 'Sản phẩm không tồn tại']);
        }
        $image_product = ImageVariantModel::where('product_id', $product_attribute->product_id)->get();
        $product = ProductsModel::where('id', $product_attribute->product_id)->first();

        $list_attribute = ProductAttributesModel::where('product_id', $product_attribute->product_id)->get();
        foreach ($list_attribute as $value) {
            $value->price = ProductValue::where('attribute_id', $value->id)->first()->promotional_price;
        }

        $product_value = ProductValue::where('product_id', $product_attribute->product_id)->where('attribute_id',$product_attribute->id)->get();
        $category = CategoryModel::find($product->category_child_id);
        $name_category = CategoryModel::find($category->parent_id);
//        $product_same = ProductsModel::where('category_children', $product->category_children)->where('id', '!=', $product->id)->limit(10)->get();
        $w_title = 'Chi tiết sản phẩm';
        return view('web.product.detail-product', compact('w_title', 'product', 'product_attribute',
            'image_product', 'product_value', 'list_attribute','name_category'));
    }
}
