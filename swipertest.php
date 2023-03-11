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


      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
	  .swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
		content: '\2192' !important;
		color: black;
		font-size: 1.2rem !important;
		width: fit-content;
		height: fit-content;
		}
	.swiper-button-prev:after, .swiper-rtl .swiper-button-next:after {
		content: '\2190' !important;
		color: black;
		font-size: 1.2rem !important;
		font-family: sans-serif;
		line-height: 0%;
		}
	.swiper-button-prev, .swiper-rtl .swiper-button-next {
		left: auto;
		right: 75px;
		}
	.swiper-button-next, .swiper-button-prev {
		width: 0;
		height: 0;
		margin: -101px 0px;
		padding: 25px 25px;
		background: #e4e4e4;
		top: 0%;
		border-radius: 5px;
		
	}
	.important{
		min-width: 50px !important;
		max-width: 75px !important;
	}
	
    </style>
  </head>

  <body>
   <div class="md:container md:mx-auto">
		<div >
			<div class="flex space-x-2 py-5">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" height="30" width="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="bg-pink-500 rounded-full p-1">
					<path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
				</svg>
				<p class="font-semibold text-pink-500 ">Categories</p>
			</div>
			
			<h1 class="text-2xl font-bold pb-10">new by category</h1>
		</div>
		<!-- Swiper -->
		<div class="my-20 relative">
			
			<div class="swiper-button-next bg-red-50 p-5"></div>
			<div class="swiper-button-prev bg-red-50 p-5"></div>
			<div id="swipertest" class="swiper  static bg-green">
			  <div class="swiper-wrapper">
				<div class="swiper-slide important border-1">
						<img src="images/demo/category-1.png" class=" image  " alt="">
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-2.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-3.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-4.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-5.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-6.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>	
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-7.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-1.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-1.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-1.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-1.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-1.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-1.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
				<div class="swiper-slide important border-1">
					<div>
						<img src="images/demo/category-1.png" class="image " alt="">
					</div>
					<h6>Phone</h6>
				</div>
			  </div>
			</div>
		</div>
	</div>

    
  </body>
</html>