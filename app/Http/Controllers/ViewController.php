<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function getHome() {
        $data = News::inRandomOrder()->limit(5)->get();

        return view('main.home', ['data' => $data]);
    }


}
