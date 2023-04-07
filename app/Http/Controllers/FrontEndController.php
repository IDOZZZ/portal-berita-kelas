<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $slider         =   Slider::all();
        $title          =   "Welcome to Zenblog";
        $news           =   News::latest()->get();
        $nav_category   =   Category::all();
        $side_news      =   News::inRandomOrder()->limit('4')->get();

        return view('frontend.index', compact('slider', 'title', 'news', 'nav_category', 'side_news'));
    }

    public function detailCategory($slug)
    {
        $title    = "Detail News - Zenblog";
        $category = Category::where('slug', $slug)->first();
        $news     = News::where('category_id', $category->id)->paginate(10);
        $nav_category = Category::all();
        $side_news      =   News::inRandomOrder()->limit('4')->get();

        return view('frontend.detail-category', compact('title', 'category', 'news', 'nav_category', 'side_news'));
    }

    public function detailNews($slug)
    {
        $category       =   Category::where('slug', $slug)->first();
        $text           =   News::where('category_id', $category->id)->paginate(10);
        $title          =   "Detail Category - $text";
        $news           =   News::where('slug', $slug)->first();
        $nav_category   =   Category::all();
        $side_news      =   News::inRandomOrder()->limit('4')->get();

        return view('frontend.detail-news', compact(
            'title',
            'news',
            'nav_category',
            'side_news'
        ));
    }
    public function searchNewsEnd(Request $request)

    {
        $keyword     = $request->keyword;
        $news        = News::where('title', 'like', '%' . $keyword . '%')->paginate(10);
        $slider         =   Slider::all();
        $title       = " Welcome to Zenblog ";
        $nav_category   =   Category::all();
        $side_news      =   News::inRandomOrder()->limit('4')->get();

        return view('frontend.index', compact('keyword', 'news', 'slider', 'title', 'nav_category', 'side_news'));
    }
}
