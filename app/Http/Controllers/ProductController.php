<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\ProductsModel;
use App\Models\ProductValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index (Request $request)
    {
        if (isset($request->key_search)){
            $data_product = ProductsModel::where('is_active', 1)->where('name', 'like', '%'.$request->get('key_search').'%')
                ->orWhere('sku', 'like', '%'.$request->get('key_search').'%')->orderBy('created_at', 'desc')->paginate(10);
        }else {
            $data_product = ProductsModel::orderBy('created_at', 'desc')->where('is_active', 1)->paginate(10);
        }
        if ($data_product){
            foreach ($data_product as $value){
                $value->product_value = ProductValue::where('product_id', $value->id)->get();
            }
        }
        $titlePage = 'Admin | Sản Phẩm';
        $page_menu = 'products';
        $page_sub = 'index';
        $listData = $data_product;
        return view('admin.products.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        $category = Categories::where('is_active', 1)->orderBy('created_at', 'desc')->get();
        $data['titlePage'] = 'Thêm sản phẩm';
        $data['category'] = $category;
        $data['page_menu'] = 'products';
        $data['page_sub'] = 'create';
        return view('admin.products.create', $data);
    }

    /**
     * create product
    **/

    public function store (Request $request)
    {
        DB::beginTransaction();
        try{
            $slug_product = Str::slug($request->get('name'));
            $product = ProductsModel::where('slug', $slug_product)->first();
            $sku_product = ProductsModel::where('sku', $request->get('sku'))->first();
            $barcode_product = ProductsModel::where('barcode', $request->get('barcode'))->first();
            $category = Categories::find($request->get('category'));
            if (isset($sku_product)){
                return back()->with(['error' => 'SKU sản phẩm đã tồn tại']);
            }
            if (isset($barcode_product)){
                return back()->with(['error' => 'Mã barcode sản phẩm đã tồn tại']);
            }
            if (isset($product)){
                return back()->with(['error' => 'Sản phẩm đã tồn tại']);
            }
            $is_product_featured = 0;
            if ($request->is_product_featured == 'on'){
                $is_product_featured = 1;
            }
            if (!$request->hasFile('file_product')){
                return back()->with(['error' => 'Vui lòng thêm hình ảnh hoặc video sản phẩm']);
            }
            $file = $request->file('file_product');
            $extension = $file->getClientOriginalExtension();
            if ($extension == 'mp4'){
                $type_banner = 2;
            }else{
                $type_banner = 1;
            }
            $banner = 'upload/product/'.Str::random(40). '.'. $extension;
            $file->move('upload/product/', $banner);
            // tinh % giam gia //
            $price = str_replace(",", "", $request->get('price') ?? 0);
            $promotional_price = str_replace(",", "", $request->get('promotion_price'));
//            $promotional_percent = 0;
//            if ($promotional_price > 0){
//                $promotional_percent = 100 - round($price / $promotional_price * 100);
//            }
            $product = new ProductsModel([
                'sku' => $request->get('sku'),
                'barcode' => $request->get('barcode'),
                'name' => $request->get('name'),
                'slug' => $slug_product,
                'banner' => $banner,
                'type_banner' => $type_banner,
                'name_trademark' => isset($trademark) ? $trademark->name : null,
                'category_id' => isset($category) ? $category->id : null,
                'name_category' => isset($category) ? $category->name : null,
                'price' => $price,
                'promotional_price' => $promotional_price,
                'quantity' => str_replace(",", "", $request->get('quantity')),
                'name_unit' => $request->get('unit'),
                'short_description' => $request->get('short_description'),
                'description' => $request->get('content'),
                'is_active' => 1,
                'is_product_featured' => $is_product_featured,
            ]);
            $product->save();
            $this->add_img_product($request, $product->id);
            $attribute = $request->get('variant');
            $this->add_and_update_attribute_product($attribute, $product);
            DB::commit();;
            return \redirect()->route('admin.products.index')->with(['success' => 'Thêm sản phẩm thành công']);
        }catch (\Exception $exception){
            DB::rollBack();
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    /**
     * Product create
     * add size product
     **/
    public function variantSize (Request $request)
    {
        $count = $request->get('count');
        $index = $request->get('index');
        $view = view('admin.products.variant-size', compact( 'count', 'index'))->render();
        return \response()->json(['html' => $view]);
    }
}
