<?php

namespace App\Http\Controllers\Admin;

use App\Models\IntroduceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IntroduceController extends Controller
{
    public function index()
    {
        $titlePage = 'Quản lý website';
        $page_menu = 'introduce';
        $page_sub = 'index';
        $listData = IntroduceModel::orderBy('created_at', 'desc')->get();
        foreach ($listData as $k => $item){
            if ($item->type == 0){
                $name_type = 'Giới thiệu';
            }elseif ($item->type == 1){
                $name_type = 'Liên hệ';
            }else{
                $name_type = 'Footer';
            }
            $listData[$k]->name_type = $name_type;
        }
        return view('admin.introduce.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Quản lý website';
            $page_menu = 'introduce';
            $page_sub = 'create';
            return view('admin.introduce.create', compact('titlePage', 'page_menu', 'page_sub'));
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store (Request $request)
    {
        try{
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $introduce = new IntroduceModel([
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'display' => $display,
                'type' => $request->get('type')
            ]);
            $introduce->save();
            return redirect()->route('admin.introduce.index')->with(['success' => 'Tạo thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        IntroduceModel::where('id', $id)->delete();
        return \redirect()->route('admin.introduce.index')->with(['success' => 'Xóa thành công']);
    }

    public function edit ($id)
    {
        try{
            $introduce = IntroduceModel::find($id);
            if (empty($introduce)){
                return back()->with(['error' => 'Bài viết không tồn tại']);
            }
            $titlePage = 'Quản lý website';
            $page_menu = 'introduce';
            $page_sub = null;
            return view('admin.introduce.edit', compact('titlePage', 'page_menu', 'page_sub', 'introduce'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $introduce = IntroduceModel::find($id);
            if (empty($introduce)){
                return back()->with(['error' => 'Bài viết không tồn tại']);
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $introduce->display = $display;
            $introduce->title = $request->get('title');
            $introduce->content = $request->get('content');
            $introduce->type = $request->get('type');
            $introduce->save();
            return redirect()->route('admin.introduce.index')->with(['success' => 'Cập nhật thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }

}
