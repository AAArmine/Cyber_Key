<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTopic;


use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $Blog = new Blog;
        return view('blog', [
            'BlogAll' => Blog::all(),
            'BlogLastTree' => Blog::orderBy('id', 'desc')->take(3)->get(),
            'BlogLastOne' => Blog::orderBy('id', 'desc')->first(),
            'BlogLastSecond' => Blog::orderBy('id', 'desc')->skip(1)->first(),
            'BlogLastThird' => Blog::orderBy('id', 'desc')->skip(2)->first(),
            'BlogMostViews' => Blog::orderBy('views', 'desc')->take(4)->get(),
            'BlogCyberKey' => $Blog->where('category_en', '=', 'Cyber Key')->get(),
            'BlogCyberKey3' => Blog::orderBy('id', 'desc')->where('category_en', '=', 'Cyber Key')->take(3)->get(),
            'BlogPersonAuth' => $Blog->where('category_en', '=', 'Person Authentication')->get(),
            'BlogPersonAuth3' => Blog::orderBy('views', 'desc')->where('category_en', '=', 'Person Authentication')->take(3)->get(),
            'BlogIndustries' => $Blog->where('category_en', '=', 'Industries')->get(),
            'BlogIndustries3' => Blog::orderBy('views', 'desc')->where('category_en', '=', 'Industries')->take(3)->get(),
            'BlogHistory' => $Blog->where('category_en', '=', 'History')->get(),
            'BlogHistory3' => Blog::orderBy('views', 'desc')->where('category_en', '=', 'History')->take(3)->get(),
            'BlogBusiness' => $Blog->where('category_en', '=', 'Business')->get(),
            'BlogBusiness3' => Blog::orderBy('views', 'desc')->where('category_en', '=', 'Business')->take(3)->get(),
        ]);
    }
    public function show_one_blog(Request $request)
    {
        $Blog = new Blog;
        return view('blog_separate', [
            'data' => $Blog->find($request->id),
            'BlogLastTree' => Blog::orderBy('id', 'desc')->take(3)->get(),
            'BlogRest' => $Blog->where('id', '<>', $request->id)->get(),
            'BlogTopics'=>BlogTopic::all(),
        ]);
    }
}
