<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BlogPostsModel;
use App\Models\IntroduceModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $banner_news = BlogPostsModel::where('display',1)->where('blog_category_id',3)->orderBy('index','desc')->get();
        $news = BlogPostsModel::where('display',1)->where('blog_category_id',2)->orderBy('index','desc')->paginate(20);

        return view('web.news.index', compact( 'banner_news','news'));
    }

    public function introduce($id)
    {
        $data = IntroduceModel::where('display',1)->where('id',$id)->first();
        return view('web.introduce.index', compact( 'data'));
    }
}
