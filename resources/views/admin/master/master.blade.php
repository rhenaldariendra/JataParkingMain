<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Assets/css/master/style.css">
    <link rel="stylesheet" href="/Assets/css/admin/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>@yield('title')</title>
</head>
<body>
    <div class="navigation-bar">
        <div class="top">
            <img src="/Assets/Images/logo_white.svg" alt="">
        </div>
        <div class="bottom">
            <p>Welcome to Admin Page - {{Auth::user()->username}}</p>
        </div>
        <a href="/logout"><i class="bi bi-save"></i></a>
    </div>
    <div class="navigation-content">
        <a href="#">Products & Services</a>
        <a href="#">Projects</a>
        <a href="#">About Us</a>
        <a href="#">News & Blogs</a>
    </div>

    <div class="contentt">
        @yield('content-form')
        <div class="lines">

        </div>
        <div class="list">
            <h3>List of @yield('page-content')</h3>
            @yield('contentt')
        </div>
    </div>

    <div class="footer">
        <div class="color"></div>
        <div class="left">
            <div class="logo">
                <img src="/Assets/Images/logo_white.svg" alt="">
                <p>We work to ensure people’s comfort</p>
            </div>
            <div class="info">
                <div class="title">
                    <p> Work Days</p>
                    <p>Monday–Friday: 9:00AM–5:00PM<br>
                        Saturday & Sunday: 11:00AM–3:00PM</p>
                </div>
            </div>

            <div class="copyright">
                <p>Copyright © 2022 Jataparking. All rights reserved.</p>
            </div>
        </div>
        <div class="right">
            <div class="btn-container">
                <a class="btn" href="#">REQUEST E-COMPANY PROFILE</a>
            </div>

            <div class="contact">
                <p>For Emmediate Services Dial</p>
                <p class="phone">021 2148 7710</p>
                <p>email : info@jataparking.com</p>
            </div>

            <div class="social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</body>
</html>
