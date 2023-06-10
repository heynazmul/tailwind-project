<?php
	include ('../baseurl.php');
	?>
		<!--header-->
		<?php include ('../header.php');?>
			<?php include ('design.php');?>
			<?php include ('jawellery-card.php');?>
			<?php include ('jawellery-arrival.php');?>
			<?php include ('jawellery-slider.php');?>
			<?php include ('jawellery-newsletter.php');?>
		<?php include ('../footer.php');?>
			<script defer src="<?php echo $baseurl;?>js/swiper-bundle.min.js"></script>
			<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<!-- Splide JS Start -->
    <script>
      var splide = new Splide(".splide", {
        type: "loop",
        perPage: 7,
        perMove: 4,
        breakpoints: {
            1080: {
                perPage: 6,
            perMove: 2,
          },
          780: {
            perPage: 4,
            perMove: 1,
          },
          576: {
            perPage: 3,
            perMove: 1,
          },

        },
      });

      splide.mount();
    </script>
    <!-- Splide JS END -->
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
	 var swiper = new Swiper("#product", {
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
  <!--slider-->
  <script>
    var swiper = new Swiper("#home-slider", {
      pagination: {
        el: ".swiper-pagination",
      },
	  loop: true,
    });
  </script>
<!--offer slider-->
<script>
    var swiper = new Swiper("#offerSlider", {
      navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
      },
		loop:true,
    });
</script>