<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function getProject(){
        $project = Project::all();
        $category = Category::all();
        // dd($category);
        return view('admin.main.project', ['project' => $project, 'category' => $category]);
    }
    public function getCategory(){
        $category = Category::all();
        return view('admin.main.category', ['category' => $category]);
    }
    public function getTeams(){
        $team = Team::all();
        return view('admin.main.team', ['team' => $team]);
    }


    public function addProject(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);

        $file = $request->file('image');
        $img_name = "project_".time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/assets/img', $file, $img_name);
        $img_name = 'assets/img/'.$img_name;

        $data = new Project();
        $data->category_id = $request->category;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->location = $request->location;
        $data->photo = $img_name;
        // dd($data);
        $data->save();

        return redirect()->back();
    }
    public function addCategory(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $data = new Category();
        $data->name = $request->name;
        $data->save();

        return redirect()->back();
    }
    public function addTeams(Request $request){
        $request->validate([
            'name' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'image' => 'required',
        ]);

        $file = $request->file('image');
        $img_name = "people_".time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/assets/img', $file, $img_name);
        $img_name = 'assets/img/'.$img_name;

        $data = new Team();
        $data->name = $request->name;
        $data->instagram = $request->instagram;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->photo = $img_name;
        // dd($data);
        $data->save();

        return redirect()->back();
    }


    public function deleteProject($id) {
        $data = Project::find($id);
        // dd($data);
        Storage::delete('public/'.$data->photo);
        $data->delete();
        return redirect()->back();
    }
    public function deleteCategory($id) {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back();
    }

}
