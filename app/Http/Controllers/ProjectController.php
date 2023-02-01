<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getProject(){
        $project = Project::all();
        $category = Category::all();
        // dd($category);
        return view('main.project', ['project' => $project, 'category' => $category]);
    }
}
