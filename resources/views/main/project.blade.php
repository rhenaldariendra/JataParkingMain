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
        <div class="category">
            <a href="#">HOSPITAL</a>
        </div>
        <div class="category">
            <a href="#">OFFICE</a>
        </div>
        <div class="category">
            <a href="#">MARKET </a>
        </div>
    </div>
    <div class="container_grid_content">
        <div class="content_project">
            <a href="">
                <img src="" alt="">
            </a>
        </div>
        <div class="content_project">
            <a href="">
                <img src="" alt="">
            </a>
        </div>
        <div class="content_project">
            <a href="">
                <img src="" alt="">
            </a>
        </div>
        <div class="content_project">
            <a href="">
                <img src="" alt="">
            </a>
        </div>
        <div class="content_project">
            <a href="">
                <img src="" alt="">
            </a>
        </div>
        <div class="content_project">
            <a href="">
                <img src="" alt="">
            </a>
        </div>
    </div>
</div>

@endsection