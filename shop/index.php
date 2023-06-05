    <?php include '../baseurl.php';?>

		<!-- header part -->
		<?php include '../header.php';?>

			<!-- shop pages -->
			<?php //include 'page-header.php';?>
			<?php include 'shop-with-sidebar.php';?>

            <!-- footer pages -->
		<?php include '../footer.php';?>


    <!-- Select2 js-->
    <script>
        $( document ).ready(function() {
            console.log( "document loaded" );
        });

        $( window ).on( "load", function() {
            console.log( "window loaded" );
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    <!-- Swiper-testimonials-->
        <script>
        var swiper = new Swiper("#Swiper-testimonials", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2000,
            autoHeight: true,
            disableOnInteraction: false,
        },
        breakpoints: {
            500: {
            slidesPerView: 1,
            },
            768: {
            slidesPerView: 2,
            },
            1024: {
            slidesPerView: 3,
            },
        },
        });
    </script>
    <!-- sweiper home-slider -->
        <script>
        var swiper = new Swiper("#Swiper-home-slider", {
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
                },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        </script>
    <script>
    /*----countdown js---*/
    $('#counter-block').ready(function(){
        $('.counter1').animationCounter({
            start: 350,
            end: 1238,
            step: 2,
            delay:.5
        });
        $('.counter2').animationCounter({
            start: 0,
            end: 820,
            step: 2,
            delay:.5
        });
        $('.counter3').animationCounter({
            start: 0,
            end: 445,
            step: 5,
            delay:25
        });
        $('.counter4').animationCounter({
            start: 0,
            end: 34,
            step: 1,
            delay:70
        });
    });
    </script>
    <!----Swiper-featured-ads-2--->
    <script>
        var swiper = new Swiper("#Swiper-featured-ads-2", {
        slidesPerView: 3,
        spaceBetween: 32,
        centeredSlides: true,
        loop: true,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        breakpoints: {
            500: {
            slidesPerView: 1,
            },
            768: {
            slidesPerView: 2,
            },
            1024: {
            slidesPerView: 4,
            },
        },
        });
    </script>
        <script>
        var swiper = new Swiper("#Swiper-our-clients", {
        slidesPerView: 5,
        loop: true,
        autoplay: {
            delay: 1000,
            autoHeight: true,
            disableOnInteraction: false,
        },
        breakpoints: {
            500: {
            slidesPerView: 2,
            },
            640: {
            slidesPerView: 4,
            },
            768: {
            slidesPerView: 4,
            },
            1024: {
            slidesPerView: 5,
            },
        },
        });
    </script>