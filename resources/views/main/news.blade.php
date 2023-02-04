@extends('master.master')
@section('title', 'News & Blog - Jataparking')
@section('content')

<link rel="stylesheet" href="/Assets/css/main/news.css">

<div class="head_news">
    <div class="sub1_head_news">
        <img src="/Assets/Images/line-aboutus.svg" alt="">
        <h1 style="color: #FFFFFF">News & Blog</h1>
    </div>
    <div class="sub2_head_news">
        <i class="bi bi-house" style="color: #FFFFFF"></i>
        <p style=" color: #FFFFFF">/</p><p style=" color: #FF8C39;">News & Blog</p>
    </div>
</div>

<div class="content_our_team">
    <div class="left_team">
        @foreach($data as $data)
        <h3>{{$data->type}}</h3>
        <h1>{{$data->title}}</h1>
        <img class="img_news" src="{{Storage::url($data->photo)}}" alt="">
        <p>{{$data->description}}</p>
        <div class="bx_team">
            <a href="detail/{{$data['id']}}">READ MORE</a>
        </div>
        @endforeach
    </div>
    <div class="right_team">
        <div class="bx_rt_cr">
            <img src="/Assets/Images/line-recent.svg" alt="">
            <h1 style="padding-left: 25px;">Recent Post</h1>
        </div>
        <div class="content_recent">
            @foreach ($news as $data)
            <a href="/detail/{{$data->id}}" class="bx_content_recent">

                <img src="{{Storage::url($data->photo)}}" alt="">
                <div class="bx_desc_cr">
                    <p class="date_cr">{{date('F j, Y', strtotime($data->date))}}</p>
                    <p class="desc_cr">{{$data->title}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
