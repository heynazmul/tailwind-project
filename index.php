<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <!-- font awesome -->
        <link rel="stylesheet" href="css/all.css">
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
		<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>Nazmul Hossain</title>
		<style>
			section{
				padding-top:100px;
				padding-bottom:75px;
			}
		</style>
    </head>
    <body >
        <header>
			<!-- Nav -->
			<?php //include ('main-nav.php');?>
			<?php include('main-nav2.php');?>
			<?php include('swipertest.php');?>
			<?php include('headphone.php');?>
			<?php include('card.php');?>
			<?php include('testmonial.php');?>
            <?php include('swipercard2.php');?>
            <?php include('swipercard.php');?>
        </header>
        <main>			
		</main>
        <footer>
			<?php include('footer.php'); ?>
        </footer>
		<!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper("#swipertest", {
        slidesPerView: 7,
        spaceBetween: 75,
        slidesPerGroup: 7,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
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
	 var swiper = new Swiper("#swipercard", {
        slidesPerView: 7,
        spaceBetween: 30,
        loop: true,
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
		
    </body>
</html>