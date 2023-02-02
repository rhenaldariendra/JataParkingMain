@extends('master.master')
@section('title', 'News & Blog - Jataparking')
@section('content')

<link rel="stylesheet" href="/Assets/css/main/detailnews.css">

<div class="head_detailnews">
    <div class="sub1_head_detailnews">
        <img src="/Assets/Images/line-aboutus.svg" alt="">
        <h1 style="color: #FFFFFF">Detail News</h1>
    </div>
    <div class="sub2_head_detailnews">
        <i class="bi bi-house" style="color: #FFFFFF"></i>
        <p style=" color: #FFFFFF">/</p><p style=" color: #FF8C39;">Detail News</p>
    </div>
</div>
<div class="content_our_team">

    <div class="left_team">
        <h3>{{$news['type']}}</h3>
        <h1>{{$news['title']}}</h1>
        <img class="img_news" src="{{Storage::url($news['photo'])}}" alt="">
        <p>{{$news['description']}}</p>
    </div>

    <div class="right_team">
        <div class="bx_rt_cr">
            <img src="/Assets/Images/line-recent.svg" alt="">
            <h1 style="padding-left: 25px;">Recent Post</h1>
        </div>
        <div class="content_recent">
            <div class="bx_content_recent">

                <img src="{{Storage::url($news->photo)}}" alt="">
                <div class="bx_desc_cr">
                    <p class="date_cr">February 5, 2019</p>
                    <p class="desc_cr">{{$news->title}}</p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
