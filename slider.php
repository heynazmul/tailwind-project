
  <style>

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
	.swiper-pagination-bullet1 {
	
    width: var(--swiper-pagination-bullet-width,var(--swiper-pagination-bullet-size,8px));
    height: var(--swiper-pagination-bullet-height,var(--swiper-pagination-bullet-size,8px));
    display: inline-block;
    border-radius: var(--swiper-pagination-bullet-border-radius,50%);
    background: var(--swiper-pagination-bullet-inactive-color,#000);
    opacity: var(--swiper-pagination-bullet-inactive-opacity, .2);
}
	
	
  </style>
<div class="md:container mx-auto">
    <div class="swiper" draggable="true" id="home-slider">
		<div class=" swiper-wrapper">
			<div class="swiper-slide">
				<div class="grid grid-cols-12">
					<div class="col-span-5">
						<div class=" flex items-center gap-x-2 py-5">
							<svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="30" width="30" class="bg-pink-500 rounded-full text-white p-2">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
							  <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
							</svg>
							<p class="font-semibold text-pink-500 ">Hot deal in this week</p>
						</div>
						<h1 class="text-5xl font-bold space-y-2">Roco Wireless Headphone</h1>
					</div>
					<div class="col-span-7 relative">
						<div class="absolute inset rounded-full bg-slate-300 flex flex-col items-center justify-center h-20 w-20 m-auto">
							<p>From</p>
							<p>$49.00</p>
						</div>
						<div class="max-w-lg">
							<img src="images/demo/slider-watch.png" alt="" class="h-auto max-w-full">
						</div>
					</div>
				</div>
			</div>
		  <div class="swiper-slide">Slide 2</div>
		  <div class="swiper-slide">Slide 3</div>
		</div>
    <div class="swiper-pagination"></div>
  </div>
</div>
  <!--
<div class="md:container md:mx-auto">
	<div class="swiper slideSwiper grid grid-cols-12">
		<div class="swiper-wrapper ">
		<div class="col-span-6">
			<div class="swiper-slide">
				<div>
					<div class="flex space-x-2 py-5">
						<svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="30" width="30" class="bg-pink-500 rounded-full text-white p-2">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
						  <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
						</svg>
						<p class="font-semibold text-pink-500 ">Hot deal in this week</p>
					</div>
					
					<h1 class="text-4xl font-bold pb-10">Roco Wireless Headphone</h1>
				</div>
			</div>
		</div>
			<div class="col-span-6">
				<p>habi jabi </p>
			</div>
		  </div>
		  <div class="swiper-slide">Slide 2</div>
		  <div class="swiper-slide">Slide 3</div>
		</div>
		<div class="swiper-pagination1"></div>
	</div>
</div>
  <!-- Initialize Swiper 
  <script>
    var swiper = new Swiper(".slideSwiper", {
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
    });
  </script> -->
