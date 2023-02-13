@extends('master.master')
@section('title', 'Home - Jataparking')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<link rel="stylesheet" href="/Assets/css/main/home.css">

<div class="slider">
    <section class="cd-slider">
        <ul>
            <li>
                <div class="content satu" style="background-image:url('/Assets/Images/slider1.svg')">
                    <blockquote>
                        <h3>Welcome to Jataparking</h3>
                        <p><i class="bi bi-dot"></i> Profesional <i class="bi bi-dot"></i> Inovatif</p>
                        <a href="#">VIEW MORE DETAILS</a>
                    </blockquote>
                </div>
            </li>
            <li>
                <div class="content dua" style="background-image:url('/Assets/Images/slider2.svg">
                    <blockquote>
                        <h3>We are Always Ready to Service</h3>
                        <p>For immediate Services Dial</p>
                        <p style="color:#FF8C39">021 2148 7710</p>
                        <a href="#">VIEW MORE DETAILS</a>
                    </blockquote>
                </div>
            </li>
        </ul>
        <nav>
            <div><a class="prev" href="#"></a></div>
            <div><a class="next" href="#"></a></div>
        </nav>
    </section>
</div>

<div class="content-2">
    <div class="items">
        <i class="bi bi-gear"></i>
        <h3>Large Number of Parking Services Provided</h3>
        <p>We are a company providing a wide range of parking area services.</p>
        <a href="#">More Services <i class="bi bi-chevron-double-right"></i></a>
    </div>
    <div class="items">
        <i class="bi bi-person"></i>
        <h3>Large Number of Parking Services Provided</h3>
        <p>We are a company providing a wide range of parking area services.</p>
        <a href="#">More Services <i class="bi bi-chevron-double-right"></i></a>
    </div>
    <div class="items">
        <i class="bi bi-hand-thumbs-up"></i>
        <h3>Large Number of Parking Services Provided</h3>
        <p>We are a company providing a wide range of parking area services.</p>
        <a href="#">More Services <i class="bi bi-chevron-double-right"></i></a>
    </div>
</div>

<div class="content-3">
    <div class="top">
        <div class="left">
            <img src="/Assets/Images/temp1.svg" alt="">
        </div>
        <div class="right">
            <p>Profile Company</p>
            <h3>PT. Karnika Jata Sadawija</h3>
            <p><strong>Parkir merupakan sumber pendapatan lain yang berdampak pada sumber pendapatan
                    utama.</strong><br>Perparkiran merupakan pintu gerbang utama dan terakhir yang berpengaruh terhadap
                image property secara keseluruhan oleh pengguna jasa parkir. Masih awam dan minimnya sumber daya manusia
                akan pengetahuan sistem pengelolaan parkir seharusnya dapat dikelola secara profesional, efisien,
                efektif dan sistematis untuk meningkatkan kenyamanan dan keamanan bagi pengguna jasa parkir. Maka perlu
                adanya pengelolaan perparkiran yang berbadan hukum dalam bentuk perusahaan sebagai solusi penyedia jasa
                pengelolaan perparkiran. Selain itu penyedia jasa pengelolaan perparkiran juga dapat membantu program
                pemerintah dalam mengurangi angka pengangguran dengan menciptakan lapangan perkerjaan.</p>
            <a href="#">MORE ABOUT <i class="bi bi-chevron-double-right"></i></a>
        </div>
    </div>
    <div class="line">
    </div>
    <div class="bottom">
        <div class="items">
            <i class="bi bi-stopwatch"></i>
            <p>Ontime at Services</p>
        </div>
        <div class="items">
            <i class="bi bi-magic"></i>
            <p>24/7 Services</p>

        </div>
        <div class="items tiga">
            <i class="bi bi-patch-check"></i>
            <p>Verified Professionals</p>

        </div>
    </div>
</div>

<div class="content-4">
    <div class="lefts">
        <div class="container">
            <h3>Our Parking System Products</h3>
            <div class="items">
                <div class="left">
                    <i class="bi bi-house-door"></i>
                </div>
                <div class="right">
                    <h4>Parking System</h4>
                    <p>Manless system and conventional parking system</p>
                </div>
            </div>
            <div class="items">
                <div class="left">
                    <i class="bi bi-gear"></i>
                </div>
                <div class="right">
                    <h4>Access Control</h4>
                    <p>Barrier gate, camera, cardreader dan vehicle loop detector</p>
                </div>
            </div>
            <div class="items">
                <div class="left">
                    <i class="bi bi-lightbulb"></i>
                </div>
                <div class="right">
                    <h4>System Equipment</h4>
                    <p>Interface module, controller board, and LED display</p>
                </div>
            </div>
            <div class="items">
                <div class="left">
                    <i class="bi bi-chevron-double-up"></i>
                </div>
                <div class="right">
                    <h4>Parking Guidance</h4>
                    <p>Digital rate board sign, IoT sensor and digital dynamic system</p>
                </div>
            </div>
        </div>
    </div>
    <div class="rights">

    </div>
</div>

<div class="content-5">
    <div class="left">
        <img src="/Assets/Images/graphic.svg" alt="">
    </div>
    <div class="right">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="text">
                    <div class="top">
                        <img src="/Assets/Images/no1.svg" alt="">
                        <h3>History</h3>
                    </div>
                    <p>Tahun 2000, H. Ahmad Hadi mendirikan PT. Mitra Adiguna Pratama. Sejak itu, perusahaan ini telah berkembang menjadi perusahaan jasa pengelola parkir yang profesional yang didukung sistem teknologi modern serta sumber daya manusia berkompetensi tinggi. Tahun 2016, bisnis ini dilanjutkan oleh Fajrul Falah sebagai President Director.</p>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="text">
                    <div class="top">
                        <img src="/Assets/Images/no2.svg" alt="">
                        <h3>Vision</h3>
                    </div>
                    <p>Menjadi perusahaan jasa pengelola parkir yang profesional dengan di dukung sistem teknologi modern serta sumber daya manusia berkompetensi tinggi untuk menjadi perusahaan termaju dan terkemuka.</p>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="text">
                    <div class="top">
                        <img src="/Assets/Images/no3.svg" alt="">
                        <h3>Mission</h3>
                    </div>
                    <p>Meningkatkan pertumbuhan usaha sehingga dapat memberikan hasil terbaik bagi mitra usaha, pengguna jasa dan karyawan yang profesional. Meningkatkan mutu layanan yang berorientasi kepada kepuasan pengguna jasa dan meningkatkan koordinasi dengan mitra usaha.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="content-6">
    <div class="containers">
        <div class="left">
            <div class="title">
                <p>GETTING KNOW LATEST ABOUT US</p>
                <h3>News & Blog</h3>
            </div>

            <div class="sub-title">
                <p>{{$top->type}}</p>
                <h3>{{$top->title}}</h3>
            </div>
            <img src="{{Storage::url($top->photo)}}" alt="">
            <p>{{$top->description}}</p>
            <a href="/detail/{{$top->id}}">READ MORE <i class="bi bi-chevron-double-right"></i></a>
        </div>
        <div class="right">
            <div class="sub-title">
                <h3>RECENT POST</h3>
            </div>
            @foreach ($data as $key)
                <a href="/detail/{{$key->id}}">
                    <div class="items">
                        <img src="{{Storage::url($key->photo)}}" alt="">
                        <div class="rights">
                            <p>{{date('F j, Y', strtotime($key->date))}}</p>
                            <p>{{$key->title}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

</div>

<script>
    var $slider = $('.slideshow .slider'),
        maxItems = $('.item', $slider).length,
        dragging = false,
        tracking,
        rightTracking;

    $sliderRight = $('.slideshow').clone().addClass('slideshow-right').appendTo($('.split-slideshow'));

    rightItems = $('.item', $sliderRight).toArray();
    reverseItems = rightItems.reverse();
    $('.slider', $sliderRight).html('');
    for (i = 0; i < maxItems; i++) {
        $(reverseItems[i]).appendTo($('.slider', $sliderRight));
    }

    $slider.addClass('slideshow-left');
    $('.slideshow-left').slick({
        vertical: true,
        verticalSwiping: true,
        arrows: false,
        infinite: true,
        dots: true,
        speed: 1000,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
    }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {

        if (currentSlide > nextSlide && nextSlide == 0 && currentSlide == maxItems - 1) {
            $('.slideshow-right .slider').slick('slickGoTo', -1);
            $('.slideshow-text').slick('slickGoTo', maxItems);
        } else if (currentSlide < nextSlide && currentSlide == 0 && nextSlide == maxItems - 1) {
            $('.slideshow-right .slider').slick('slickGoTo', maxItems);
            $('.slideshow-text').slick('slickGoTo', -1);
        } else {
            $('.slideshow-right .slider').slick('slickGoTo', maxItems - 1 - nextSlide);
            $('.slideshow-text').slick('slickGoTo', nextSlide);
        }
    });

    $('.slideshow-right .slider').slick({
        swipe: false,
        vertical: true,
        arrows: false,
        infinite: true,
        speed: 950,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        initialSlide: maxItems - 1
    });
    $('.slideshow-text').slick({
        swipe: false,
        vertical: true,
        arrows: false,
        infinite: true,
        speed: 900,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
    });

    //
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        //   dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }

</script>
<script>
    (function () {

        var autoUpdate = false,
            timeTrans = 4000;

        var cdSlider = document.querySelector('.cd-slider'),
            item = cdSlider.querySelectorAll("li"),
            nav = cdSlider.querySelector("nav");

        item[0].className = "current_slide";

        for (var i = 0, len = item.length; i < len; i++) {
            var color = item[i].getAttribute("data-color");
            item[i].style.backgroundColor = color;
        }

        // Detect IE
        // hide ripple effect on IE9
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE");
        if (msie > 0) {
            var version = parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
            if (version === 9) {
                cdSlider.className = "cd-slider ie9";
            }
        }

        if (item.length <= 1) {
            nav.style.display = "none";
        }

        function prevSlide() {
            var currentSlide = cdSlider.querySelector("li.current_slide"),
                prevElement = currentSlide.previousElementSibling,
                prevSlide = (prevElement !== null) ? prevElement : item[item.length - 1],
                prevColor = prevSlide.getAttribute("data-color"),
                el = document.createElement('span');

            currentSlide.className = "";
            prevSlide.className = "current_slide";

            nav.children[0].appendChild(el);

            var size = (cdSlider.clientWidth >= cdSlider.clientHeight) ? cdSlider.clientWidth * 2 : cdSlider
                .clientHeight * 2,
                ripple = nav.children[0].querySelector("span");

            ripple.style.height = size + 'px';
            ripple.style.width = size + 'px';
            ripple.style.backgroundColor = prevColor;

            ripple.addEventListener("webkitTransitionEnd", function () {
                if (this.parentNode) {
                    this.parentNode.removeChild(this);
                }
            });

            ripple.addEventListener("transitionend", function () {
                if (this.parentNode) {
                    this.parentNode.removeChild(this);
                }
            });

        }

        function nextSlide() {
            var currentSlide = cdSlider.querySelector("li.current_slide"),
                nextElement = currentSlide.nextElementSibling,
                nextSlide = (nextElement !== null) ? nextElement : item[0],
                nextColor = nextSlide.getAttribute("data-color"),
                el = document.createElement('span');

            currentSlide.className = "";
            nextSlide.className = "current_slide";

            nav.children[1].appendChild(el);

            var size = (cdSlider.clientWidth >= cdSlider.clientHeight) ? cdSlider.clientWidth * 2 : cdSlider
                .clientHeight * 2,
                ripple = nav.children[1].querySelector("span");

            ripple.style.height = size + 'px';
            ripple.style.width = size + 'px';
            ripple.style.backgroundColor = nextColor;

            ripple.addEventListener("webkitTransitionEnd", function () {
                if (this.parentNode) {
                    this.parentNode.removeChild(this);
                }
            });

            ripple.addEventListener("transitionend", function () {
                if (this.parentNode) {
                    this.parentNode.removeChild(this);
                }
            });

        }

        updateNavColor();

        function updateNavColor() {
            var currentSlide = cdSlider.querySelector("li.current_slide");

            var nextColor = (currentSlide.nextElementSibling !== null) ? currentSlide.nextElementSibling
                .getAttribute("data-color") : item[0].getAttribute("data-color");
            var prevColor = (currentSlide.previousElementSibling !== null) ? currentSlide.previousElementSibling
                .getAttribute("data-color") : item[item.length - 1].getAttribute("data-color");

            if (item.length > 2) {
                nav.querySelector(".prev").style.backgroundColor = prevColor;
                nav.querySelector(".next").style.backgroundColor = nextColor;
            }
        }

        nav.querySelector(".next").addEventListener('click', function (event) {
            event.preventDefault();
            nextSlide();
            updateNavColor();
        });

        nav.querySelector(".prev").addEventListener("click", function (event) {
            event.preventDefault();
            prevSlide();
            updateNavColor();
        });

        //autoUpdate
        setInterval(function () {
            if (autoUpdate) {
                nextSlide();
                updateNavColor();
            };
        }, timeTrans);

    })();

</script>

@endsection
