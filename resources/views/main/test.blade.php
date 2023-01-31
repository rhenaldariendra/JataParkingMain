<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Assets/css/test.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script> --}}
    <title>Document</title>
</head>

<body>
    <div class="parent">
        <div class="split-slideshow">
            
            <div class="slideshow">
                <div class="slider">
                    <div class="item">
                        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-2.jpg" />
                    </div>
                    <div class="item">
                        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-3.jpg" />
                    </div>
                    <div class="item">
                        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-4.jpg" />
                    </div>
                    <div class="item">
                        <img src="https://raw.githubusercontent.com/supahfunk/supah-codepen/master/canyon-1.jpg" />
                    </div>
                </div>
            </div>
            <div class="slideshow-text">
                <div class="item">Canyon</div>
                <div class="item">Desert</div>
                <div class="item">Erosion</div>
                <div class="item">Shape</div>
            </div>
        </div>
    </div>
    <div class="test">


        <h1>asdasdadasd</h1>
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
</body>

</html>
