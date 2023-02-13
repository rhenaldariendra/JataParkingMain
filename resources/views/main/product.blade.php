@extends('master.master')
@section('title', 'Product - Jataparking')
@section('content')
<link rel="stylesheet" href="/Assets/css/main/product.css">

<div class="product-title">
    <h3>Products & Services</h3>
    <p  style="color: #FFFFFF"><i class="bi bi-house"></i> / <label style="color: #FF8C39;">Services</label></p>
</div>

<div class="product-content">
    {{-- <div class="left">
        <img src="/Assets/Images/product.svg" alt="">
    </div> --}}
    <div class="right">
        <div class="title">
            <p>WHY CHOOSE US</p>
            <h3>Our Professional Maid Services</h3>
        </div>
        <div class="text">
            <p>We are a team of professional and skilled experts in all domestic spheres. We offer range of service with any household needs:</p>
        </div>
        <div class="containers">
            <div class="items">
                <i class="bi bi-chevron-double-right"></i>
                <p>User Friendly</p>
            </div>
            <div class="items">
                <i class="bi bi-chevron-double-right"></i>
                <p>Easy Maintenance</p>
            </div>
            <div class="items">
                <i class="bi bi-chevron-double-right"></i>
                <p>High Reliability</p>
            </div>
            <div class="items">
                <i class="bi bi-chevron-double-right"></i>
                <p>Adaptive Improvement</p>
            </div>
        </div>

        <div class="partners">
            <div class="lefts">
                <img src="/Assets/Images/smart_parking1.svg" alt="">
            </div>
            <div class="rights">
                <div class="title">
                    <p>Services</p>
                    <h3>Our Partners</h3>
                </div>

                <a href="#">MORE DETAILS <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>

    </div>
</div>


@endsection
