@extends('master.master')
@section('title', 'Home - Jataparking')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<link rel="stylesheet" href="/Assets/css/main/home.css">

<div class="slider"> </div>

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
        <div class="items">
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
        {{-- image slider --}}
    </div>
</div>

<div class="content-6">
    <div class="title">
        <p>WORKING WITH EXCELLENT</p>
        <h3>Our Great Team</h3>
    </div>
    <div class="team">
        <div class="item">

        </div>
        <div class="item">

        </div>
        <div class="item">

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

</script>
@endsection