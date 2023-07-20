<?php

namespace App\Http\Controllers;

use App\Models\News;
use ArrayObject;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function getHome() {

        $data = News::inRandomOrder()->limit(5)->get();
        $top = new ArrayObject();
        $idx = 0;
        foreach ($data as $key) {
            // $top += $data;
            if($idx!=0){
                $top->append($key);
            }
            $idx++;
        }
        // dd($data);
        return view('main.home', ['top' => $data[0], 'data' => $top]);
    }


}
