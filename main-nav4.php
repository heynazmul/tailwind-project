
  <header class="">
    <nav aria-label="Top" class="bg-black text-white mx-auto max-w-8xl px-4 sm:px-6 lg:px-8">
      <div class="px-12">
        <div class="flex h-10 items-center">
          <div class="lg:pl-8 hidden md:block">
            <ul class="flex space-x-5"><li class="">
					<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
					  <button type="button" class="flex items-center text-sm hover:text-red-800 duration-700 gap-1" @click="open =! open" @mousedown="if (open) $event.preventDefault()">
						<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" stroke="currentColor" aria-hidden="true"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M51.7 295.1l31.7 6.3c7.9 1.6 16-.9 21.7-6.6l15.4-15.4c11.6-11.6 31.1-8.4 38.4 6.2l9.3 18.5c4.8 9.6 14.6 15.7 25.4 15.7c15.2 0 26.1-14.6 21.7-29.2l-6-19.9c-4.6-15.4 6.9-30.9 23-30.9h2.3c13.4 0 25.9-6.7 33.3-17.8l10.7-16.1c5.6-8.5 5.3-19.6-.8-27.7l-16.1-21.5c-10.3-13.7-3.3-33.5 13.4-37.7l17-4.3c7.5-1.9 13.6-7.2 16.5-14.4l16.4-40.9C303.4 52.1 280.2 48 256 48C141.1 48 48 141.1 48 256c0 13.4 1.3 26.5 3.7 39.1zm407.7 4.6c-3-.3-6-.1-9 .8l-15.8 4.4c-6.7 1.9-13.8-.9-17.5-6.7l-2-3.1c-6-9.4-16.4-15.1-27.6-15.1s-21.6 5.7-27.6 15.1l-6.1 9.5c-1.4 2.2-3.4 4.1-5.7 5.3L312 330.1c-18.1 10.1-25.5 32.4-17 51.3l5.5 12.4c8.6 19.2 30.7 28.5 50.5 21.1l2.6-1c10-3.7 21.3-2.2 29.9 4.1l1.5 1.1c37.2-29.5 64.1-71.4 74.4-119.5zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM144.5 348.1c-2.1 8.6 3.1 17.3 11.6 19.4l32 8c8.6 2.1 17.3-3.1 19.4-11.6s-3.1-17.3-11.6-19.4l-32-8c-8.6-2.1-17.3 3.1-19.4 11.6zm92-20c-2.1 8.6 3.1 17.3 11.6 19.4s17.3-3.1 19.4-11.6l8-32c2.1-8.6-3.1-17.3-11.6-19.4s-17.3 3.1-19.4 11.6l-8 32zM343.2 113.7c-7.9-4-17.5-.7-21.5 7.2l-16 32c-4 7.9-.7 17.5 7.2 21.5s17.5 .7 21.5-7.2l16-32c4-7.9 .7-17.5-7.2-21.5z"/></svg>
						<span>Language</span>
						<svg xmlns="http://www.w3.org/2000/svg"  class="h-3 w-3" viewBox="0 0 320 512" fill="currentColor"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
					  </button>
					  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 border-t-2 border-red-500 bg-white w-40 mt-2.5" x-ref="panel" @click.away="open = false">
						<div class="">
							<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
								ENGLISH
							</a>
							<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
								SWEDISH
							</a>
							<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
								ARABIC
							</a>
							<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
								RUSSAIN
							</a>
							<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500">
								CHINESE
							</a>
						</div>
					  </div>
					</div>
				</li>
			</ul>
          </div>
			<div class="ml-auto flex items-end">
			  <div class="md:pr-2">
				<ul class="flex space-x-5">
					<li class="">
						<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
						<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"fill="currentColor" stroke="currentColor" aria-hidden="true"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 96h64c17.7 0 32 14.3 32 32V384c0 17.7-14.3 32-32 32H352c-17.7 0-32 14.3-32 32s14.3 32 32 32h64c53 0 96-43 96-96V128c0-53-43-96-96-96H352c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-7.5 177.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H160v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg>
						<span class="px-1">Log In</span>
						</a>
					</li>
					<li class="hidden lg:block">
						<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
						<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"fill="currentColor" stroke="currentColor" aria-hidden="true"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 144c0-44.2 35.8-80 80-80s80 35.8 80 80v48c0 17.7 14.3 32 32 32s32-14.3 32-32V144C576 64.5 511.5 0 432 0S288 64.5 288 144v48H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H352V144z"/></svg>
						<span class="px-1.5">Register</span>
						</a>
					</li>
					<li class="">
						<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
						  <button type="button" class="flex items-center text-sm hover:text-red-800 duration-700 gap-1" @click="open =! open" @mousedown="if (open) $event.preventDefault()">
							<img src="images/demo/3.jpg" alt="" class="block h-auto w-6 flex-shrink-0 rounded-full">
							<span>Umair</span>
							<svg xmlns="http://www.w3.org/2000/svg"  class="h-3 w-3" viewBox="0 0 320 512" fill="currentColor"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
						  </button>
						  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 border-t-2 border-red-500 bg-white w-52 mt-2" x-ref="panel" @click.away="open = false">
							<div class="">
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									USER PROFILE
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									ARCHIVES
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									ARABIC
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									ACTIVE ADS
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									FAVOURITE ADS
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									MASSAGE PANEL
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500">
									ACCOUNT DEACTIVATION
								</a>
							</div>
						  </div>
						</div>
					</li>
				</ul>
			  </div>
			</div>	
			<button class="py-2.5 px-5 bg-red-600 hover:bg-red-700 duration-700 text-sm font-medium">
				SELL YOR CAR
			</button>
		</div>
      </div>
    </nav>
	
	<div class="bg-white" x-data="Components.popover({ open: true, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
	  <div class="mx-auto max-w-8xl hidden lg:block">
		<div class="flex items-center justify-between py-6 md:justify-start px-24 md:space-x-8 ">
		  <div class="shrink-0">
			<a href="#">
			  <span class="sr-only">Your Company</span>
			  <img class="h-10 w-auto block" src="images/demo/company-logo.png" alt="">
			</a>
		  </div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <button type="button" class=" group inline-flex items-center text-sm font-medium hover:text-red-700 " x-on:mouseover="open =! open">
				<span>HOME</span>
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-4 w-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-8 xl:mt-9 border-t-2 border-red-500 bg-white w-48" x-ref="panel" @click.away="open = false">
				<div class="">
					<ul>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								HOME 1
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								HOME 2
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								HOME 3
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								HOME 4
							</a>
						</li>
						<li class="p-5">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								HOME 5
							</a>
						</li>
					</ul>
				</div>
			  </div>
			</div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
			  <button type="button" class="group inline-flex items-center text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
				<span>CARS</span>
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-4 w-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="border-t-2 border-red-500 bg-white absolute z-10 mt-8 xl:mt-9 w-screen max-w-4xl xl:max-w-6xl transform lg:-translate-x-1/4 mx-auto" x-ref="panel" @click.away="open = false">
				<div class="grid grid-cols-12 ">
					<div class="col-span-2">
					<p class="text-lg font-bold pl-6 py-3">CONDITION</p>
						<ul class="">
							<li class="px-4 py-3 ">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">NEW</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">USED</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">RECONDITION</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">FEATURED CAR</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-span-6">
					<p class="text-lg font-bold pl-6 py-3">BRANDS</p>
						<ul class="flex">
							<li class="px-4">
								<a href="#" class="">
									<img src="images/demo/company/1.png" alt="">
								</a>
							</li>
							<li class="px-4">
								<a href="#" class="">
									<img src="images/demo/company/2.png" alt="">
								</a>
							</li>
							<li class="px-4">
								<a href="#" class="">
									<img src="images/demo/company/3.png" alt="">
								</a>
							</li>
							<li class="px-4">
								<a href="#" class="">
									<img src="images/demo/company/4.png" alt="">
								</a>
							</li>
							<li class="px-4">
								<a href="#" class="">
									<img src="images/demo/company/5.png" alt="">
								</a>
							</li>
						</ul>
						<ul class="flex py-2">
							<li class="px-4">
								<a href="#" class="">
									<img src="images/demo/company/6.png" alt="">
								</a>
							</li>
							<li class="px-4">
								<a href="#" class="">
									<img src="images/demo/company/7.png" alt="">
								</a>
							</li>
							<li class="px-4">
								<a href="#" class="">
									<img src="images/demo/company/8.png" alt="">
								</a>
							</li>
							<li class="px-4">
								<a href="#" class="">
									<img src="images/demo/company/9.png" alt="">
								</a>
							</li>
							<li class="px-4">
								<a href="#" class="">
									<img src="images/demo/company/11.png" alt="">
								</a>
							</li>
						</ul>
					</div>
					<div class="col-span-4">
						<p class="text-lg font-bold pl-6 py-3">Body Types</p>
						<ul class="flex py-2">
							<li class="px-4 text-center">
								<a href="#" class="">
									<img src="images/demo/car-body/1.png" alt="">
									<span class="text-sm font-medium">CONVERTIBLE</span>
								</a>
							</li>
							<li class="px-4 text-center">
								<a href="#" class="">
									<img src="images/demo/car-body/2.png" alt="">
									<span class="text-sm font-medium ">COUPE</span>
								</a>
							</li>
							<li class="px-4 text-center">
								<a href="#" class="">
									<img src="images/demo/car-body/3.png" alt="">
									<span class="text-sm font-medium ">SEDAN</span>
								</a>
							</li>
						</ul>
						<ul class="flex py-2">
							<li class="px-4 text-center">
								<a href="#" class="">
									<img src="images/demo/car-body/5.png" alt="">
									<span class="text-sm font-medium ">VAN/MINIVAN</span>
								</a>
							</li>
							<li class="px-4 text-center">
								<a href="#" class="">
									<img src="images/demo/car-body/6.png" alt="">
									<span class="text-sm font-medium ">TRUCK</span>
								</a>
							</li>
							<li class="px-4 text-center">
								<a href="#" class="">
									<img src="images/demo/car-body/6.png" alt="">
									<span class="text-sm font-medium ">HYBRID</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			  </div>
			</div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <button type="button" class=" group inline-flex items-center text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()">
				<span>LISTING</span>
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-4 w-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-8 xl:mt-9 border-t-2 border-red-500 bg-white w-48" x-ref="panel" @click.away="open = false">
				<div class="">
					<ul>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">GRID STYLE</span>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
								</svg>
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">LIST STYLE</span>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
								</svg>
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">SINGLE AD</span>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 text-black">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
								</svg>
							</a>
						</li>
						<li class="p-5">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								TEMPLETE ICON
							</a>
						</li>
					</ul>
				</div>
			  </div>
			</div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <button type="button" class=" group inline-flex items-center text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()">
				<span>REVIEWS</span>
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-4 w-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-8 xl:mt-9 border-t-2 border-red-500 bg-white w-48" x-ref="panel" @click.away="open = false">
				<div class="">
					<ul>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">EXPERT REVIEWS</span>
							</a>
						</li>
						<li class="p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">REVIEW DETAIL</span>
							</a>
						</li>
					</ul>
				</div>
			  </div>
			</div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <button type="button" class=" group inline-flex items-center text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()">
				<span>COMPARE</span>
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-4 w-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-8 xl:mt-9 border-t-2 border-red-500 bg-white w-48" x-ref="panel" @click.away="open = false">
				<div class="">
					<ul>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">CAR COMPARISON</span>
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">COMPARISON STYLE 2</span>
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">COMPARE DETAIL</span>
							</a>
						</li>
					</ul>
				</div>
			  </div>
			</div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <button type="button" class=" group inline-flex items-center text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()">
				<span>DASHBOARD</span>
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-4 w-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-8 xl:mt-9 border-t-2 border-red-500 bg-white w-48" x-ref="panel" @click.away="open = false">
				<div class="">
					<ul>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">USER PROFILE</span>
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">ARCHIVES</span>
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">ACTIVE ADS</span>
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">FAVOURITE ADS</span>
							</a>
						</li>
						<li class="border-b p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">MASSAGE PANEL</span>
							</a>
						</li>
						<li class="p-5">
							<a href="#"class="text-sm font-medium flex items-center justify-between">
								<span class="hover:text-red-500">ACCOUNT DEACTIVATION</span>
							</a>
						</li>
					</ul>
				</div>
			  </div>
			</div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <button type="button" class="group inline-flex items-center text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
				<span>PAGES</span>
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-4 w-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="border-t-2 border-red-500 bg-white absolute z-10 mt-8 xl:mt-9 w-screen max-w-4xl xl:max-w-6xl transform md:-translate-x-3/4" x-ref="panel" @click.away="open = false">
				<div class="grid grid-cols-12">
					<div class="col-span-2">
					<p class="text-lg font-bold pl-6 py-3">BLOG</p>
						<ul class="">
							<li class="px-4 py-3 ">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Right Sidebar</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Masonry Style</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Without Sidebar</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">Single Blog</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-span-2">
						<p class="text-lg font-bold pl-6 py-3">Miscellaneous</p>
						<ul class="">
							<li class="px-4 py-3 ">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> About Us</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> About Us 2</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Comming Soon</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">Shortcodes</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-span-2">
						<p class="text-lg font-bold pl-6 py-3">Others</p>
						<ul class="">
							<li class="px-4 py-3 ">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> 404 Page</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> FAQS</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Login</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">Register</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-span-2">
						<p class="text-lg font-bold pl-6 py-3">Extra Page</p>
						<ul class="">
							<li class="px-4 py-3 ">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Post Ad</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Pricing</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Site Map</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">Contact Us</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-span-2">
						<p class="text-lg font-bold pl-6 py-3">Services Page</p>
						<ul class="">
							<li class="px-4 py-3 ">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Services</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Services 2</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">Profile</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">Messages</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-span-2">
						<p class="text-lg font-bold pl-6 py-3">Trending</p>
						<ul class="">
							<li class="px-4 py-3 ">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Reviews</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500"> Review Detail</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">Compare</span>
								</a>
							</li>
							<li class="px-4 py-3">
								<a href="#" class="text-sm font-medium flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
									<span class="hover:text-red-500">Comapre Detail</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			  </div>
			</div>
			<div class="hidden xl:block items-center justify-end">
				<div class="grid grid-cols-12 gap-2 border-l">
					<div class="col-span-4 border-l pl-2">
						<a href="#" class=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-12 h-12">
						<path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
						</svg></a>
					</div>
					<div class="col-span-8 ">
						<p class="text-base font-medium text-gray-500">Call Us Now</p>
						<p class="text-lg font-medium text-red-500 whitespace-nowrap">111 222 333 444</p>
					</div>
				</div>
		  </div>
		</div>
	  </div>
	  
  <!--
    Mobile menu, show/hide based on mobile menu state.
  -->
  <div class="md:px-16 my-5 mr-2 lg:hidden" x-data="{offcanvas:false}">
		<div class="flex items-center justify-between">
			<div>
				<a href="#">
				  <span class="sr-only">Your Company</span>
				  <img class="h-12 w-full" src="images/demo/company-logo.png" alt="">
				</a>
			</div>
			<div class="">
				<div class="relative py-3 sm:max-w-xl mx-auto">
					<nav x-data="{ open: false }">
						<button class="text-gray-500 w-14 h-12 relative focus:outline-none bg-black" @click="offcanvas =! offcanvas">
							<span class="sr-only">Open main menu</span>
							<div class="block w-5 absolute left-5 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
								<span aria-hidden="true" class="block absolute h-1 w-10 bg-white transform transition duration-500 ease-in-out" :class="{'rotate-45': offcanvas,' -translate-y-1.5': !offcanvas }"></span>
								<span aria-hidden="true" class="block absolute  h-1 w-10 bg-white   transform transition duration-500 ease-in-out" :class="{'opacity-0': offcanvas } "></span>
								<span aria-hidden="true" class="block absolute  h-1 w-10 bg-white transform  transition duration-500 ease-in-out" :class="{'-rotate-45': offcanvas, ' translate-y-1.5': !offcanvas}"></span>
							</div>
						</button>
					</nav>
				</div>
			    <!--<button type="button" class="relative group inline-flex items-center justify-center bg-gray-800 text-white hover:bg-gray-900" @click="offcanvas =! offcanvas">
				<div class="relative flex overflow-hidden items-center justify-center w-[64px] h-[48px] transform transition-all duration-200">
				  <div class="flex flex-col justify-between w-[28px] h-[28px] transform transition-all duration-300 origin-center overflow-hidden">
					<div class="bg-white h-[4px] w-8 transform transition-all duration-300 origin-left group-focus:rotate-[47deg]"></div>
					<div class="bg-white h-[4px] w-8 rounded transform transition-all duration-300 group-focus:-translate-x-10"></div>
					<div class="bg-white h-[4px] w-8 transform transition-all duration-300 origin-left group-focus:-rotate-[47deg]"></div>
				  </div>
				</div>
			  </button> -->
			</div>
		</div>
	  <div x-show="offcanvas" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute inset-x-0 transform transition lg:hidden" x-ref="panel" @click.away="offcanvas = false" style="display: none;">
		<div class="bg-white ">
		  <div class="p-5 pb-6 bg-white">
			  <nav class="grid">
				<div class="relative py-5 border-b lg:border-0" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
				  <a href="#" class="flex items-center justify-between text-sm font-medium hover:text-red-700" @click="open =! open">
					<span class="hover:text-red-500">HOME</span>
					<svg x-state:on="Item active" x-state:off="Item inactive" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
					</svg>
				  </a>
				  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 bg-white w-full" x-ref="panel" @click.away="open = false">
					<div class="">
						<ul>
							<li class="border-b p-5">
								<a href="#"class="text-xs font-bold hover:text-red-500">
									HOME 1
								</a>
							</li>
							<li class="border-b p-5">
								<a href="#"class="text-xs font-bold hover:text-red-500">
									HOME 2
								</a>
							</li>
							<li class="border-b p-5">
								<a href="#"class="text-xs font-bold hover:text-red-500">
									HOME 3
								</a>
							</li>
							<li class="border-b p-5">
								<a href="#"class="text-xs font-bold hover:text-red-500">
									HOME 4
								</a>
							</li>
							<li class="p-5">
								<a href="#"class="text-xs font-bold hover:text-red-500">
									HOME 5
								</a>
							</li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="relative py-5 border-b lg:border-0" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
				  <a href="#" class="flex items-center justify-between text-sm font-medium hover:text-red-700" @click="open =! open" @mousedown="if (open) $event.preventDefault()">
					<span class="hover:text-red-500">CARS</span>
					<svg x-state:on="Item active" x-state:off="Item inactive" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
					</svg>
				  </a>
				  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="bg-white absolute z-10 mt-6 w-full max-w-7xl " x-ref="panel" @click.away="open = false">
					<div class="grid grid-cols-12 ">
						<div class="col-span-12 ">
						<p class="text-lg font-bold pl-6 py-3">CONDITION</p>
							<ul class="">
								<li class="px-4 py-3 ">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">NEW</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">USED</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">RECONDITION</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">FEATURED CAR</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-span-12 ">
						<p class="text-lg font-bold pl-6 py-3">BRANDS</p>
							<ul class="flex">
								<li class="px-4">
									<a href="#" class="">
										<img src="images/demo/company/1.png" alt="">
									</a>
								</li>
								<li class="px-4">
									<a href="#" class="">
										<img src="images/demo/company/2.png" alt="">
									</a>
								</li>
								<li class="px-4">
									<a href="#" class="">
										<img src="images/demo/company/3.png" alt="">
									</a>
								</li>
								<li class="px-4">
									<a href="#" class="">
										<img src="images/demo/company/4.png" alt="">
									</a>
								</li>
								<li class="px-4">
									<a href="#" class="">
										<img src="images/demo/company/5.png" alt="">
									</a>
								</li>
							</ul>
							<ul class="flex py-2">
								<li class="px-4">
									<a href="#" class="">
										<img src="images/demo/company/6.png" alt="">
									</a>
								</li>
								<li class="px-4">
									<a href="#" class="">
										<img src="images/demo/company/7.png" alt="">
									</a>
								</li>
								<li class="px-4">
									<a href="#" class="">
										<img src="images/demo/company/8.png" alt="">
									</a>
								</li>
								<li class="px-4">
									<a href="#" class="">
										<img src="images/demo/company/9.png" alt="">
									</a>
								</li>
								<li class="px-4">
									<a href="#" class="">
										<img src="images/demo/company/11.png" alt="">
									</a>
								</li>
							</ul>
						</div>
						<div class="col-span-12 ">
							<p class="text-lg font-bold pl-6 py-3">Body Types</p>
							<ul class="flex py-2">
								<li class="px-4 text-center">
									<a href="#" class="">
										<img src="images/demo/car-body/1.png" alt="">
										<span class="text-sm font-medium">CONVERTIBLE</span>
									</a>
								</li>
								<li class="px-4 text-center">
									<a href="#" class="">
										<img src="images/demo/car-body/2.png" alt="">
										<span class="text-sm font-medium ">COUPE</span>
									</a>
								</li>
								<li class="px-4 text-center">
									<a href="#" class="">
										<img src="images/demo/car-body/3.png" alt="">
										<span class="text-sm font-medium ">SEDAN</span>
									</a>
								</li>
							</ul>
							<ul class="flex py-2">
								<li class="px-4 text-center">
									<a href="#" class="">
										<img src="images/demo/car-body/5.png" alt="">
										<span class="text-sm font-medium ">VAN/MINIVAN</span>
									</a>
								</li>
								<li class="px-4 text-center">
									<a href="#" class="">
										<img src="images/demo/car-body/6.png" alt="">
										<span class="text-sm font-medium ">TRUCK</span>
									</a>
								</li>
								<li class="px-4 text-center">
									<a href="#" class="">
										<img src="images/demo/car-body/6.png" alt="">
										<span class="text-sm font-medium ">HYBRID</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				  </div>
				</div>
				<div class="relative py-5 border-b lg:border-0" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
				  <a href="#" class="flex items-center justify-between text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()">
					<span>LISTING</span>
					<svg x-state:on="Item active" x-state:off="Item inactive" class="w-4 h-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
					</svg>
				  </a>
				  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-6 bg-white w-full" x-ref="panel" @click.away="open = false">
					<div class="">
						<ul>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">GRID STYLE</span>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
								</a>
							</li>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">LIST STYLE</span>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
								</a>
							</li>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">SINGLE AD</span>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 text-black">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
									</svg>
								</a>
							</li>
							<li class="p-5">
								<a href="#"class="text-sm font-medium hover:text-red-500">
									TEMPLETE ICON
								</a>
							</li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="relative py-5 border-b lg:border-0" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
				  <a href="#" class="flex items-center justify-between text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()">
					<span>REVIEWS</span>
					<svg x-state:on="Item active" x-state:off="Item inactive" class="pl-80 h-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
					</svg>
				  </a>
				  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-6 bg-white w-full" x-ref="panel" @click.away="open = false">
					<div class="">
						<ul>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">EXPERT REVIEWS</span>
								</a>
							</li>
							<li class="p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">REVIEW DETAIL</span>
								</a>
							</li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="relative py-5 border-b lg:border-0" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
				  <a href="#" class="flex items-center justify-between text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()">
					<span>COMPARE</span>
					<svg x-state:on="Item active" x-state:off="Item inactive" class="pl-80 h-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
					</svg>
				  </a>
				  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-6 bg-white w-full" x-ref="panel" @click.away="open = false">
					<div class="">
						<ul>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">CAR COMPARISON</span>
								</a>
							</li>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">COMPARISON STYLE 2</span>
								</a>
							</li>
							<li class="p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">COMPARE DETAIL</span>
								</a>
							</li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="relative py-5 border-b lg:border-0" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
				  <a href="#" class="flex items-center justify-between text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()">
					<span>DASHBOARD</span>
					<svg x-state:on="Item active" x-state:off="Item inactive" class="pl-80 h-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
					</svg>
				  </a>
				  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-6 bg-white w-full" x-ref="panel" @click.away="open = false">
					<div class="">
						<ul>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">USER PROFILE</span>
								</a>
							</li>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">ARCHIVES</span>
								</a>
							</li>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">ACTIVE ADS</span>
								</a>
							</li>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">FAVOURITE ADS</span>
								</a>
							</li>
							<li class="border-b p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">MASSAGE PANEL</span>
								</a>
							</li>
							<li class="p-5">
								<a href="#"class="text-sm font-medium flex items-center justify-between">
									<span class="hover:text-red-500">ACCOUNT DEACTIVATION</span>
								</a>
							</li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="relative py-5" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
				  <a href="#" class="flex items-center justify-between text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
					<span>PAGES</span>
					<svg x-state:on="Item active" x-state:off="Item inactive" class="w-4 h-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
					</svg>
				  </a>
				  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="bg-white absolute z-10 mt-6 w-full max-w-6xl lg:mr-96 transform lg:-translate-x-3/4" x-ref="panel" @click.away="open = false">
					<div class="grid grid-cols-12">
						<div class="col-span-12">
						<p class="text-lg font-bold pl-6 py-3">BLOG</p>
							<ul class="">
								<li class="px-4 py-3 ">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Right Sidebar</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Masonry Style</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Without Sidebar</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">Single Blog</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-span-12">
							<p class="text-lg font-bold pl-6 py-3">Miscellaneous</p>
							<ul class="">
								<li class="px-4 py-3 ">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> About Us</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> About Us 2</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Comming Soon</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">Shortcodes</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-span-12">
							<p class="text-lg font-bold pl-6 py-3">Others</p>
							<ul class="">
								<li class="px-4 py-3 ">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> 404 Page</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> FAQS</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Login</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">Register</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-span-12">
							<p class="text-lg font-bold pl-6 py-3">Extra Page</p>
							<ul class="">
								<li class="px-4 py-3 ">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Post Ad</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Pricing</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Site Map</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">Contact Us</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-span-12">
							<p class="text-lg font-bold pl-6 py-3">Services Page</p>
							<ul class="">
								<li class="px-4 py-3 ">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Services</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Services 2</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">Profile</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">Messages</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-span-12">
							<p class="text-lg font-bold pl-6 py-3">Trending</p>
							<ul class="">
								<li class="px-4 py-3 ">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Reviews</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500"> Review Detail</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">Compare</span>
									</a>
								</li>
								<li class="px-4 py-3">
									<a href="#" class="text-sm font-medium flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 pr-1.5">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
										</svg>
										<span class="hover:text-red-500">Comapre Detail</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				  </div>
				</div>
			  </nav>
			</div>
		</div>
	  </div>
  </div>
</div>
	
	
	
	
	
	
	
  </header>


