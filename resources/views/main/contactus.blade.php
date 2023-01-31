@extends('master.master')
@section('title', 'Contact Us - Jataparking')
@section('content')

<link rel="stylesheet" href="/Assets/css/main/contactus.css">

<div class="head_contactus">
    <div class="sub1_head_contactus">
        <img src="/Assets/Images/line-aboutus.svg" alt="">
        <h1 style="color: #FFFFFF">Contact Us</h1>
    </div>
    <div class="sub2_head_contactus">
        <i class="bi bi-house" style="color: #FFFFFF"></i>
        <p style=" color: #FFFFFF">/</p><p style=" color: #FF8C39;">Contact Us</p>
    </div>
</div>
<div class="map"></div>
    <iframe src="https://maps.google.com/maps?q=jl.%20tipar&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="content_contactus">
    <div class="left_contactus">
        <div class="bx1">
            <img src="/Assets/Images/line-contactus.svg" alt="">
            <h2 class="cf" style="padding-left: 25px;">Contact</h2>
        </div>
        <p>Use the form below to drop us an-email, Feel free to contact us by telephone/whatsapp or email and we will be sure to get back to you as soon as possible.</p>
        <form action="/action_page.php">
            <div class="sub_input">
                <input type="text" id="name" name="name" placeholder="Name">
            </div>
            <div class="sub_input">
                <input type="text" id="email" name="email" placeholder="Email">
            </div>
            <div class="sub_input">
                <input type="text" id="subject" name="subject" placeholder="Subject"> 
            </div>
            <div class="sub_input">
                <textarea name="messeges" id="messeges" cols="30" rows="10" placeholder="Messeges"></textarea>
            </div>
            <div class="submit_btn">
                <a href="">Submit</a>
            </div>
        </form>
    </div>
    <div class="right_contactus">
        <div class="bx2">
            <h2 class="cf" style="padding-right: 25px;">Find Us</h2>
            <img src="/Assets/Images/line-contactus.svg" alt="">
        </div>
        <div class="ct_right_contactus">
            <div class="bx3">
                <h3>Address</h3>
                <p>Ruko Cordoba Blok F No. 23 Jl. Marina Raya, Kamal Muara Jakarta Utara 14470</p>
            </div>
            <div class="bx3">
                <h3>Hours of Service</h3>
                <p>Monday–Friday: 9:00AM–5:00PM</p>
                <p>Saturday & Sunday: 11:00AM–3:00PM</p>
            </div>
            <div class="bx3">
                <h3>Services</h3>
                <p>info@jataparking.com</p>
                <p>(+62)21 2903 3426</p>
            </div>
        </div>
    </div>
</div>
@endsection