<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNews(){
        $news = News::latest()->take(4)->get();
        return view('main.news', ['news' => $news, 'news' => $news]);
    }
}