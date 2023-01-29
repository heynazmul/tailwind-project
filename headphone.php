<style>
.music-singnal {
    display: block;
    position: absolute;
    top: 48%;
    left: 45%;
    width: 100px;
    height: 100px;
    transform: rotate(-95deg);
    @media #{$lg-layout} {
        top: 44%;
        left: 40%;
    } 
    @media #{$large-mobile} {
        display: none;
    }

    .item-circle {
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        border-color: var(--color-chart03);
        border-style: solid;
        border-width: 1px 4px 0 0;
        border-radius: 0 100% 0 0;
        opacity: 0;
        animation: signalanimation 2s infinite;

        &.circle-1 {
            animation-delay: 800ms;
        }
        &.circle-2 {
            width: 80px;
            height: 80px;
            animation-delay: 600ms;
        }
        &.circle-3 {
            width: 60px;
            height: 60px;
            animation-delay: 400ms;
        }
        &.circle-4 {
            width: 40px;
            height: 40px;
            animation-delay: 200ms;
        }
        &.circle-5 {
            width: 20px;
            height: 20px;
            animation-delay: 0ms;
        }
    }
}


</style>
<section class="mx-10 px-20 bg-slate-200">
	<div class="sm:container sm:mx-auto">
		<div class="grid grid-cols-12">
			<div class="col-span-6">
				<div class="flex space-x-2 py-5">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" height="30" width="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="bg-pink-500 rounded-full p-1">
				  <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
				</svg>
				<p class="font-semibold text-pink-500 ">Categories</p>
			</div>
			<div>
				<h1 class="text-7xl font-bold pb-10 mr-10">Enhance Your Music Experience</h1>
				<div>
					<ul class="flex space-x-4">
						<li class="bg-slate-50 rounded-full p-5 px-7 text-center">0<p>Day</p></li>
						<li class="bg-slate-50 rounded-full p-5 px-7 text-center">0<p>Hrs</p></li>
						<li class="bg-slate-50 rounded-full p-5 px-7 text-center">0<p>Min</p></li>
						<li class="bg-slate-50 rounded-full p-5 px-7 text-center">0<p>Sec</p></li>
					</ul>
				</div>
			</div>
			</div>
		</div>
		<button type="button" class="text-white bg-blue-400 rounded-full mt-6 px-5 py-2 scale-75 hover:scale-100 ">Check it out!</button>
	</div>
</section>