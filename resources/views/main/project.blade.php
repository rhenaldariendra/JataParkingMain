@extends('master.master')
@section('title', 'Projects - Jataparking')
@section('content')

<link rel="stylesheet" href="/Assets/css/main/project.css">

<div class="head_project">
    <div class="sub1_head_project">
        <img src="/Assets/Images/line-aboutus.svg" alt="">
        <h1 style="color: #FFFFFF">Projects</h1>
    </div>
    <div class="sub2_head_project">
        <i class="bi bi-house" style="color: #FFFFFF"></i>
        <p style=" color: #FFFFFF">/</p><p style=" color: #FF8C39;">Projects</p>
    </div>
</div>

<div class="content_project_box">
    <div class="container_grid_cat">
        <div class="category">
            <a href="#">ALL</a>
        </div>
        @foreach ($category as $data)
        <div class="category">
            <a href="#">{{$data->name}}</a>
        </div>
        @endforeach
    </div>
    <div class="container_grid_content">
        @foreach ($project as $data)
        <div class="content_project">
            <a href="">
                <img src="{{Storage::url($data->photo)}}" alt="">
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
