<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ImageVariantModel;
use App\Models\ProductAttributesModel;
use App\Models\ProductInformationModel;
use App\Models\ProductRelatedModel;
use App\Models\ProductsModel;
use App\Models\ProductValue;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($status)
    {
        if ($status == 'dien-thoai') {
            $type = 1;
            $name_cate = "Điện thoại";
        }
        $cate = CategoryModel::where('display', 1)->where('type', $type)->where('parent_id', 0)->get();
        $product = ProductsModel::join('product_attributes', 'products.id', '=', 'product_attributes.product_id')
            ->orderBy('product_attributes.promotional_price', 'asc')
            ->select('products.*')
            ->paginate(20);
        foreach ($product as $item) {
            $item->infor = ProductInformationModel::find($item->product_infor_id);
            $item->type_product = ProductsModel::where('product_infor_id', $item->product_infor_id)->get();
            $item->price = ProductAttributesModel::where('product_id', $item->id)->first()->price;
            $item->promotional_price_item = ProductAttributesModel::where('product_id', $item->id)->first()->promotional_price;
        }

        $name = null;
        return view('web.category.index', compact('cate', 'name_cate', 'status', 'name', 'product'));
    }

    public function productCate($status, $name)
    {
        if ($status == 'dien-thoai') {
            $type = 1;
            $name_cate = "Điện thoại";
        }
        $id_cate = CategoryModel::where('name', $name)->where('display', 1)->where('type', $type)->first();
        $cate = CategoryModel::where('display', 1)->where('type', $type)->where('parent_id', $id_cate->id)->get();
        return view('web.category.index', compact('cate', 'name_cate', 'status', 'name'));
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
}
