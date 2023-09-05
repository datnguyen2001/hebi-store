<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPostsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index (Request $request)
    {
        $titlePage = 'Danh sách bài viết';
        $page_menu = 'blog';
        $page_sub = 'index';
        if (isset($request->key_search)) {
            $listData = BlogPostsModel::Where('title', 'like', '%' . $request->get('key_search') . '%')
                ->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $listData = BlogPostsModel::orderBy('created_at', 'desc')->paginate(10);
        }

        return view('admin.blog.index', compact('titlePage', 'page_menu', 'listData', 'page_sub'));
    }
    public function create ()
    {
        $titlePage = 'Bài viết';
        $page_menu = 'blog';
        $page_sub = 'index';
        return view('admin.blog.create', compact('titlePage', 'page_menu', 'page_sub'));
    }

    public function store(Request $request)
    {
        try {
            if (!$request->hasFile('file')){
                return back()->with(['error' => 'Vui lòng thêm hình ảnh']);
            }
            $file = $request->file('file');
            $part = 'upload/banner/img/';
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            if ($request->get('is_featured') == 'on'){
                $is_featured = 1;
            }else{
                $is_featured = 0;
            }
            $file_name = $part.Str::random(40). '.'. $file->getClientOriginalExtension();
            $request->file('file')->move($part, $file_name);

            $posts = new BlogPostsModel();
            $posts->title = $request->get('title');
            $posts->slug = Str::slug($request->get('title'));
            $posts->image = $file_name;
            $posts->content = $request->get('content');
            $posts->type = $request->get('type');
            $posts->index = $request->get('index');
            $posts->is_featured = $is_featured;
            $posts->display = $display;
            $posts->save();

            return \redirect()->route('admin.blog.index')->with(['success' => 'Thêm blog thành công']);

        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function delete ($id)
    {
        BlogPostsModel::where('id', $id)->delete();
        return \redirect()->route('admin.blog.index')->with(['success' => 'Xóa blog thành công']);
    }

    public function edit ($id)
    {
        $blog = BlogPostsModel::find($id);
        $titlePage = 'Bài viết';
        $page_menu = 'blog';
        $page_sub = 'index';
        return view('admin.blog.edit', compact('blog', 'titlePage', 'page_menu', 'page_sub'));
    }

    public function update ($id, Request $request)
    {
        try{
            $blog = BlogPostsModel::find($id);
            if (empty($blog)){
                return back()->with(['error'=> 'Blog không tồn tại']);
            }
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $part = 'upload/banner/img/';
                $file_name = $part.Str::random(40). '.'. $file->getClientOriginalExtension();
                $request->file('file')->move($part, $file_name);
                unlink($blog->image);
                $blog->image = $file_name;
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            if ($request->get('is_featured') == 'on'){
                $is_featured = 1;
            }else{
                $is_featured = 0;
            }
            $blog->title = $request->get('title');
            $blog->slug = Str::slug($request->get('title'));
            $blog->content = $request->get('content');
            $blog->type = $request->get('type');
            $blog->index = $request->get('index');
            $blog->is_featured = $is_featured;
            $blog->display = $display;
            $blog->save();
            return \redirect()->route('admin.blog.index')->with(['success' => 'Sửa blog thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }
}
