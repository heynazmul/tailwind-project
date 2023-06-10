
    <!-- Font Awesome CDN Link -->
    <script src="https://kit.fontawesome.com/6a68f40924.js" crossorigin="anonymous"></script>

    <!-- Splide Slider CDN Link -->
    
<style>

.splide__arrow {
    background: #ccc;
    border: 0;
    border-radius: 0%;
    cursor: pointer;
    /* display: flex; */
    height: 2em;
    opacity: 0.7;
    padding: 0;
    position: absolute;
    /* transform: translateY(-50%); */
    width: 3em;
    z-index: 1;
}
.splide__arrow--prev {
    left: -4em;
}
.splide__arrow--next {
    left: 1em;
}
</style>
<section class="splide mt-[20px] sm:container sm:mx-auto px-16 lg:px-20" aria-label="Splide Basic HTML Example">
	<!-- Arrow Start -->
	<div class="splide__arrows absolute top-0 right-[10%]">
		<button class="splide__arrow splide__arrow--prev">
			<i class="fa-solid fa-arrow-left-long"></i>
		</button>
		<button class="splide__arrow splide__arrow--next">
			<i class="fa-solid fa-arrow-right-long"></i>
		</button>

	</div>
	<!-- Arrow End -->

	<!-- Slider Section -->
	<div  class="splide__track pt-10">
		<div class="splide__list h-36">
			<div class="splide__slide border m-4 ">
			  <div class="flex justify-center flex-col py-5 items-center">
				<img class="h-12" src="<?php echo $baseurl;?>images/demo/jewelry-13.png" alt="" />
				<div class="mt-2">
					<h4 class="text-sm font-bold">Base mattel</h4>
				</div>
			  </div>
			</div>
			<div class="splide__slide border m-4 ">
			  <div class="flex justify-center flex-col py-5 items-center">
				<img class="h-12" src="<?php echo $baseurl;?>images/demo/jewelry-12.png" alt="" />
				<div class="mt-2">
					<h4 class="text-sm font-bold">Base mattel</h4>
				</div>
			  </div>
			</div>
			<div class="splide__slide border m-4 ">
			  <div class="flex justify-center flex-col py-5 items-center">
				<img class="h-12" src="<?php echo $baseurl;?>images/demo/jewelry-11.png" alt="" />
				<div class="mt-2">
					<h4 class="text-sm font-bold">Base mattel</h4>
				</div>
			  </div>
			</div>
			<div class="splide__slide border m-4 ">
			  <div class="flex justify-center flex-col py-5 items-center">
				<img class="h-12" src="<?php echo $baseurl;?>images/demo/jewelry-12.png" alt="" />
				<div class="mt-2">
					<h4 class="text-sm font-bold">Base mattel</h4>
				</div>
			  </div>
			</div>
			<div class="splide__slide border m-4 ">
			  <div class="flex justify-center flex-col py-5 items-center">
				<img class="h-12" src="<?php echo $baseurl;?>images/demo/jewelry-12.png" alt="" />
				<div class="mt-2">
					<h4 class="text-sm font-bold">Base mattel</h4>
				</div>
			  </div>
			</div>
		</div>
	</div>
</section>
