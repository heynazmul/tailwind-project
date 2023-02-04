<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>
      html,
      
      .swiper {
        width: 100%;
        height: 100%;
      }


        /* Center slide text vertically */
       { display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
	  .swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
		content: '\2192' !important;
		color: black;
		font-weight: bold;
		font-size: 1.5rem !important;
		}
	.swiper-button-prev:after, .swiper-rtl .swiper-button-next:after {
		content: '\2190' !important;
		color: black;
		font-weight: bold;
		font-size: 1.5rem !important;
		}
	.swiper-button-prev, .swiper-rtl .swiper-button-next {
		left: auto;
		right: 50px;
		}
	.swiper-button-next, .swiper-button-prev {
		top: 54%;
		
	}
    </style>
  </head>

  <body>
    <!-- Swiper -->
	<div class="sm:container sm:mx-auto my-20">
	<div class="flex space-x-2 py-5">
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" height="30" width="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="bg-pink-500 rounded-full p-1">
		  <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
		</svg>
		<p class="font-semibold text-pink-500 ">Categories</p>
	</div>
		<div>
			<h1 class="text-2xl font-bold pb-10">Browse by category</h1>
		<div class="swiper-button-next bg-red-50 p-5"></div>
		<div class="swiper-button-prev bg-red-50 p-5"></div>
	</div>
		<div class="swiper mySwiper static">
		  <div class="swiper-wrapper">
			<div class="swiper-slide p-10 border-1">
					<img src="images/demo/category-1.png" class=" w-full  " alt="">
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-2.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-3.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-4.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-5.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-6.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>	<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-7.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-8.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-8.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-1.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-1.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-1.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-1.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
				<div class="swiper-slide p-10 border-1">
				<div>
					<img src="images/demo/category-1.png" class="image " alt="">
				</div>
				<h6>Phone</h6>
			</div>
		  </div>
		</div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 7,
        spaceBetween: 30,
        slidesPerGroup: 7,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      });
    </script>
  </body>
</html>
