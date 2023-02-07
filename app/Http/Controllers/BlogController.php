<?php

namespace App\Http\Controllers;

use App\Models\BlogPostsModel;
use App\Models\CategoryBlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index ()
    {
        $titlePage = 'Admin';
        $page_menu = 'blog';
        $page_sub = 'category_blog';
        $listData = CategoryBlogModel::get();
        return view('admin.blog.category.index', compact('titlePage', 'page_menu', 'listData', 'page_sub'));
    }
    public function create()
    {
        $titlePage = 'Admin';
        $page_menu = 'blog';
        $page_sub = 'category_blog';
        return view('admin.blog.category.create', compact('titlePage', 'page_menu', 'page_sub'));
    }
    public function store (Request $request)
    {
        try{
            $display = 0;
            if ($request->display == 'on'){
                $display = 1;
            }
            $blog = new CategoryBlogModel();
            $blog['name'] = $request->get('name');
            $blog['display'] = $display;
            $blog->save();
            return \redirect()->route('admin.blog.index')->with(['success' => 'Tạo mới thành công']);
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function delete ($id)
    {
        CategoryBlogModel::where('id', $id)->delete();
        return \redirect()->route('admin.blog.index')->with(['success' => 'Xóa thành công']);
    }

    public function edit ($id)
    {
        $blog = CategoryBlogModel::find($id);
        $titlePage = 'Admin';
        $page_menu = 'blog';
        $page_sub = 'category_blog';
        return view('admin.blog.category.edit', compact('blog', 'titlePage', 'page_menu', 'page_sub'));
    }

    public function update (Request $request , $id)
    {
        try{
            if ($request->display == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $blog = CategoryBlogModel::find($id);
            $blog->name= $request->get('name');
            $blog->display= $display;
            $blog->save();
            return \redirect()->route('admin.blog.index')->with(['success' => 'Cập nhật thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function indexPosts ()
    {
        $titlePage = 'Bài viết';
        $page_menu = 'blog';
        $page_sub = 'blog';
        $listData = BlogPostsModel::get();
        return view('admin.blog.posts.index', compact('titlePage', 'page_menu', 'listData', 'page_sub'));
    }
    public function createPosts ()
    {
        $titlePage = 'Bài viết';
        $page_menu = 'Blog';
        $page_sub = 'blog';
        $blogCategory = CategoryBlogModel::get();
        return view('admin.blog.posts.create', compact('titlePage', 'page_menu', 'blogCategory', 'page_sub'));
    }

    public function storePosts(Request $request)
    {
        try {
            if (!$request->hasFile('file')){
                return back()->with(['error' => 'Vui lòng thêm hình ảnh hoặc video']);
            }
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            if ($extension == 'mp4' || $extension == 'video'){
                $part = 'upload/banner/video/';
                $is_video = 1;
            }else{
                $is_video = 0;
                $part = 'upload/banner/img/';
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $file_name = $part.Str::random(40). '.'. $file->getClientOriginalExtension();
            $request->file('file')->move($part, $file_name);
            $category = CategoryBlogModel::find($request->get('blogCategory_id'));

            $posts = new BlogPostsModel();
            $posts->title = $request->get('title');
            $posts->blog_category_id = isset($category) ? $request->get('blogCategory_id') : null;
            $posts->src = $file_name;
            $posts->is_video = $is_video;
            $posts->link = $request->get('link');
            $posts->content = $request->get('content');
            $posts->index = $request->get('index');
            $posts->display = $display;
            $posts->save();

            return \redirect()->route('admin.blog.blog_posts.index')->with(['success' => 'Thêm thành công']);

        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function deletePosts ($id)
    {
        BlogPostsModel::where('id', $id)->delete();
        return \redirect()->route('admin.blog.blog_posts.index')->with(['success' => 'Xóa thành công']);
    }

    public function editPosts ($id)
    {
        $blog = BlogPostsModel::find($id);
        $category = CategoryBlogModel::orderBy('created_at', 'desc')->get();
        $titlePage = 'Bài viết';
        $page_menu = 'Blog';
        $page_sub = 'blog';
        return view('admin.blog.posts.edit', compact('blog', 'titlePage', 'page_menu', 'page_sub','category'));
    }

    public function updatePosts ($id, Request $request)
    {
        try{
            $blog = BlogPostsModel::find($id);
            if (empty($blog)){
                return back()->with(['error'=> 'Blog không tồn tại']);
            }
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                if ($extension == 'mp4' || $extension == 'video'){
                    $part = 'upload/banner/video/';
                    $is_video = 1;
                }else{
                    $is_video = 0;
                    $part = 'upload/banner/img/';
                }
                $file_name = $part.Str::random(40). '.'. $file->getClientOriginalExtension();
                $request->file('file')->move($part, $file_name);
                unlink($blog->src);
                $blog->src = $file_name;
                $blog->is_video = $is_video;
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $category = CategoryBlogModel::find($request->get('blogCategory_id'));
            $blog->title = $request->get('title');
            $blog->blog_category_id = isset($category) ? $request->get('blogCategory_id') : null;
            $blog->content = $request->get('content');
            $blog->link = $request->get('link');
            $blog->index = $request->get('index');
            $blog->display = $display;
            $blog->save();
            return \redirect()->route('admin.blog.blog_posts.index')->with(['success' => 'Sửa blog thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }
}
