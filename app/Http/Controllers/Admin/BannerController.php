<?php

namespace App\Http\Controllers\Admin;

use App\Models\BannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index()
    {
        $titlePage = 'Admin';
        $page_menu = 'banner';
        $page_sub = 'index';
        $listData = BannerModel::orderBy('index', 'asc')->get();
        return view('admin.banner.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Admin';
            $page_menu = 'banner';
            $page_sub = 'create';
            return view('admin.banner.create', compact('titlePage', 'page_menu', 'page_sub'));
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store (Request $request)
    {
        try{
            if (!$request->hasFile('file')){
                return back()->with(['error' => 'Vui lòng thêm hình ảnh hoặc video']);
            }
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            if ($extension == 'mp4' || $extension == 'video'){
                $part = 'upload/banner/video/';
            }else{
                $part = 'upload/banner/img/';
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $file_name = $part.Str::random(40). '.'. $file->getClientOriginalExtension();
            $request->file('file')->move($part, $file_name);
            $banner = new BannerModel([
                'title' => $request->get('title'),
                'link' => $request->get('link'),
                'index' => $request->get('index'),
                'display' => $display,
                'src' => $file_name
            ]);
            $banner->save();
            return redirect()->route('admin.banner.index')->with(['success' => 'Tạo banner thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        $banner = BannerModel::find($id);
        if (empty($banner)){
            $data['status'] = false;
            $data['msg'] = 'Banner không tồn tại';
            return $data;
        }
        unlink($banner->src);
        $banner->delete();
        $data['status'] = true;
        return $data;
    }

    public function edit ($id)
    {
        try{
            $banner = BannerModel::find($id);
            if (empty($banner)){
                return back()->with(['error' => 'Banner không tồn tại']);
            }
            $titlePage = 'Admin';
            $page_menu = 'banner';
            $page_sub = null;
            return view('admin.banner.edit', compact('titlePage', 'page_menu', 'page_sub', 'banner'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $banner = BannerModel::find($id);
            if (empty($banner)){
                return back()->with(['error' => 'Banner không tồn tại']);
            }
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                if ($extension == 'mp4' || $extension == 'video'){
                    $part = 'upload/banner/video/';
                    $type = 2;
                }else{
                    $type = 1;
                    $part = 'upload/banner/img/';
                }
                $file_name = $part.Str::random(40). '.'. $file->getClientOriginalExtension();
                $request->file('file')->move($part, $file_name);
                unlink($banner->src);
                $banner->src = $file_name;
                $banner->type = $type;
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $banner->display = $display;
            $banner->title = $request->get('title');
            $banner->link = $request->get('link');
            $banner->index = $request->get('index');
            $banner->save();
            return redirect()->route('admin.banner.index')->with(['success' => 'Cập nhật banner thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
