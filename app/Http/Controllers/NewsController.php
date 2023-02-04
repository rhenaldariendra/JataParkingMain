<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNews(){
        $news = News::latest()->limit(4)->get();
        $data = News::all();
        return view('main.news', ['news' => $news, 'data' => $data]);
    }
    public function getDetailNews($id) {
        $data = News::latest()->limit(4)->get();
        $news = News::find($id);
        return view('main.detailnews', ['news' => $news, 'data' => $data]);
    }

}
