<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNews(){
        $news = News::latest()->inRandomOrder()->limit(4)->get();
        return view('main.news', ['news' => $news, 'news' => $news]);
    }
    public function getDetailNews($id) {
        $news = News::find($id);
        return view('main.detailnews', ['news' => $news, 'news' => $news]);
    }

}
