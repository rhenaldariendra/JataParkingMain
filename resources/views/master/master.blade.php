<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Assets/css/master/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    {{-- ---- --}}
    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{-- -------------- --}}

    {{-- JQuery CDN --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- ---------- --}}

    <title>@yield('title')</title>
</head>

<body>
    <a href="#tops" class="to-top">
        <i class="bi bi-caret-up"></i>
    </a>
    <div class="header before">
        <div class="header-info">
            <div class="left">
                <p><i class="bi bi-telephone-fill"></i>Client Service: 021 2148 7710</p>
            </div>
            <div class="right">
                <div class="email">
                    <p><i class="bi bi-envelope"></i>Email: info@jataparking.com</p>
                </div>
                <div class="separator">
                    <p>|</p>
                </div>
                <div class="social">
                    <a href="/"><i class="bi bi-facebook"></i></a>
                    <a href="/"><i class="bi bi-twitter"></i></a>
                    <a href="/"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="header-navigation">
            <div class="logo">
                <a href="/">
                    <img src="/Assets/Images/logo.svg" alt="Logo - Jataparking">
                </a>
                <label class="btn-hamb" for="btn-hmb">
                    <i style="font-size: 40px" class="bi bi-list"></i>
                </label>
            </div>
            <input type="checkbox" name="btn-hmb" id="btn-hmb" hidden>
            <ul class="navigation">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li id="a">
                    <a id="b" href="#">ABOUT US</a>
                    <ul id="c">
                        <li><a href="/profile_company">Profile Company</a></li>
                        <li><a href="/contactus">Contact Us</a></li>
                    </ul>
                </li>
                <li id="d">
                    <a id="e" href="#">PRODUCTS & SERVICES</a>
                    <ul id="f">
                        <li><a href="/product">Products</a></li>
                        <li><a href="/partner">Partnes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/news">NEWS & BLOGS</a>
                </li>
                <li class="seps">
                    <p>|</p>
                </li>
                {{-- <li class="search">
                    <input type="checkbox" name="search" id="search" hidden>
                    <label for="search"><i class="bi bi-search"></i></label>
                </li> --}}
                <li>
                    <a class="contact" href="/contactus">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="head" id="tops">

    </div>

    <div class="conents">
        @yield('content')

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
                    <p>Monday–Friday: 9:00AM–5:00PM</p>
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
                <p class="phone">(+62)21 21487710</p>
                <p>email : info@jataparking.com</p>
            </div>

            <div class="social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>



    <script>
        $(function () {
            $('#a').hover(function () {
                $('#b').css('color', '#FF8C39');
                $('#c').css('opacity', '1');
                $('#c').css('display', 'block');
                $('#c').css('visibility', 'visible');
            }, function () {
                // on mouseout, reset the background colour
                $('#b').css('color', '#633AB4');
                $('#c').css('opacity', '0');
                $('#c').css('display', 'none');
                $('#c').css('visibility', 'hidden');
            });
        });
        document.getElementById("e").addEventListener("click", function(event){
            event.preventDefault()
        });
        document.getElementById("b").addEventListener("click", function(event){
            event.preventDefault()
        });
        $(function () {
            $('#d').hover(function () {
                $('#e').css('color', '#FF8C39');
                $('#f').css('opacity', '1');
                $('#f').css('display', 'block');
                $('#f').css('visibility', 'visible');
            }, function () {
                // on mouseout, reset the background colour
                $('#e').css('color', '#633AB4');
                $('#f').css('opacity', '0');
                $('#f').css('display', 'none');
                $('#f').css('visibility', 'hidden');
            });
        });
        // $(function () {
        //     if($('#btn-hamb').checked == true) {

        //     }

        // });


        $(window).on('scroll', function () {
            if ($(window).scrollTop()) {
                $('.header').removeClass('before').addClass('after');
            } else {
                $('.header').removeClass('after').addClass('before');
            }
        })

    </script>
</body>

</html>
