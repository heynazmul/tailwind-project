
 <header class="">
    <nav aria-label="Top" class=" mx-auto max-w-8xl px-4 sm:px-6 lg:px-8">
      <div class="px-12">
        <div class="sm:flex justify-between h-10 items-center">
          <div class="lg:pl-8 flex justify-center">
            <ul class="flex space-x-5">
				<li class="">
					<a href="#" class="flex items-center text-sm">
					<div class="flex justify-center">
						<div
							x-data="{
								open: false,
								toggle() {
									if (this.open) {
										return this.close()
									}
									this.$refs.button.focus()
									this.open = true
								},
								close(focusAfter) {
									if (! this.open) return

									this.open = false

									focusAfter && focusAfter.focus()
								}
							}"
							x-on:keydown.escape.prevent.stop="close($refs.button)"
							x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
							x-id="['dropdown-button']"
							class="relative">
							<!-- Button -->
							<button
								x-ref="button"
								x-on:click="toggle()"
								:aria-expanded="open"
								:aria-controls="$id('dropdown-button')"
								type="button"
								class="flex items-center gap-2">
								English
								<!-- Heroicon: chevron-down -->
								<svg xmlns="http://www.w3.org/2000/svg"  class="h-3 w-3" viewBox="0 0 320 512" fill="currentColor"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
							</button>
							<!-- Panel -->
							<div
								x-ref="panel"
								x-show="open"
								x-transition.origin.top.left
								x-on:click.outside="close($refs.button)"
								:id="$id('dropdown-button')"
								style="display: none;"
								class="absolute left-0 mt-2.5 w-40 bg-white">
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-small text-black hover:text-white hover:bg-pink-500 disabled:text-gray-500 rounded-lg">
									ENGLISH
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-small text-black hover:text-white hover:bg-pink-500 disabled:text-gray-500 rounded-lg">
									Spanish
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-small text-black hover:text-white hover:bg-pink-500 disabled:text-gray-500 rounded-lg">
									ARABIC
								</a>
							</div>
						</div>
					</div>
					</a>
				</li>
				<li class="">
					<a href="#" class="flex items-center text-sm">
					<div class="flex justify-center">
						<div
							x-data="{
								open: false,
								toggle() {
									if (this.open) {
										return this.close()
									}
									this.$refs.button.focus()
									this.open = true
								},
								close(focusAfter) {
									if (! this.open) return

									this.open = false

									focusAfter && focusAfter.focus()
								}
							}"
							x-on:keydown.escape.prevent.stop="close($refs.button)"
							x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
							x-id="['dropdown-button']"
							class="relative">
							<!-- Button -->
							<button
								x-ref="button"
								x-on:click="toggle()"
								:aria-expanded="open"
								:aria-controls="$id('dropdown-button')"
								type="button"
								class="flex items-center gap-2">
								USD
								<!-- Heroicon: chevron-down -->
								<svg xmlns="http://www.w3.org/2000/svg"  class="h-3 w-3" viewBox="0 0 320 512" fill="currentColor"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
							</button>
							<!-- Panel -->
							<div
								x-ref="panel"
								x-show="open"
								x-transition.origin.top.left
								x-on:click.outside="close($refs.button)"
								:id="$id('dropdown-button')"
								style="display: none;"
								class="absolute left-0 mt-2.5 w-40 bg-white">
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-small text-black hover:text-white hover:bg-pink-500 disabled:text-gray-500 rounded-lg">
									USD
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-small text-black hover:text-white hover:bg-pink-500 disabled:text-gray-500 rounded-lg">
									AUD
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-small text-black hover:text-white hover:bg-pink-500 disabled:text-gray-500 rounded-lg">
									EUR
								</a>
							</div>
						</div>
					</div>
					</a>
				</li>
            </ul>
          </div>
			<div class=" flex items-end justify-center pt-2">
			  <div class="md:pr-2">
				<ul class="flex space-x-5">
					<li class="">
						<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
						<span class="px-1">Help</span>
						</a>
					</li>
					<li>
						<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
						<span class="px-1.5">join us</span>
						</a>
					</li>
					<li>
						<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
						<span class="px-1.5">Sign in</span>
						</a>
					</li>
				</ul>
			  </div>
			</div>	
		</div>
      </div>
    </nav>
	<div class="bg-white" x-data="Components.popover({ open: true, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
	  <div class="mx-auto max-w-8xl hidden lg:block">
		<div class="flex items-center justify-between py-6 md:justify-center px-24 md:space-x-8 bg-gray-100">
		  <div class="shrink-0 whitespace-nowrap">
			<a href="#">
			  <span class="sr-only">Your Company</span>
			  <img class="h-10 w-auto block shrink-0 " src=" <?php echo $baseurl;?>images/demo/logo.png" alt="">
			</a>
		  </div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
			  <button type="button" class=" group inline-flex items-center text-sm font-medium  " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
				<span>HOME</span>
				<!--
				  Heroicon name: mini/chevron-down

				  Item active: "text-gray-600", Item inactive: "text-gray-400"
				-->
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-5 w-5 text-slate-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-5 bg-white w-48" x-ref="panel" @click.away="open = false">
				<div class="">
					
					<ul>
						<li class="border-b px-4 py-4">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Home - Electronics
							</a>
						</li>
						<li class="border-b px-4 py-4">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Home - NFT
							</a>
						</li>
						<li class="border-b px-4 py-4">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Home - Jewellery
							</a>
						</li>
						<li class="border-b px-4 py-4">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Home - Furniture
							</a>
						</li>
						<li class="border-b  px-4 py-4">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Home - multipurpose
							</a>
						</li>
						<li class="border-b  px-4 py-4">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								RTL Version
							</a>
						</li>
					</ul>
				</div>
			  </div>
			</div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
			  <button type="button" class=" group inline-flex items-center text-sm font-medium  " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
				<span>Shop</span>
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-5 w-5 text-slate-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-5 bg-white w-48" x-ref="panel" @click.away="open = false">
				<div class="">
					
					<ul>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Shop with sidebar
							</a>
						</li>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Shop No Sidebar
							</a>
						</li>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Product varitaion-1
							</a>
						</li>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Product varitaion-2
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Product varitaion-3
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-smdfont-medium hover:text-red-500">
								Product varitaion-4
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Product varitaion-5
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Product varitaion-6
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Product varitaion-7
							</a>
						</li>
					</ul>
				</div>
			  </div>
			</div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
			  <button type="button" class=" group inline-flex items-center text-sm font-medium  " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
				<span>Pages</span>
				<!--
				  Heroicon name: mini/chevron-down

				  Item active: "text-gray-600", Item inactive: "text-gray-400"
				-->
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-5 w-5 text-slate-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-5 bg-white w-48" x-ref="panel" @click.away="open = false">
				<div class="">
					
					<ul>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Whishlist
							</a>
						</li>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Cart
							</a>
						</li>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Account
							</a>
						</li>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Sign up
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Forget Password
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Privacy Policy
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Coming Soon
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								404 Eror 
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-md font-medium hover:text-red-500">
								Typography
							</a>
						</li>
					</ul>
				</div>
			  </div>
			</div>
			<div>
			  <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
			  <button type="button" class=" group inline-flex items-center text-sm font-medium  " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
				<span>About</span>
			  </button>
			</div>
			<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			  <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
			  <button type="button" class=" group inline-flex items-center text-sm font-medium  " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
				<span>Blog</span>
				<!--
				  Heroicon name: mini/chevron-down

				  Item active: "text-gray-600", Item inactive: "text-gray-400"
				-->
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-5 w-5 text-slate-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-5 bg-white w-48" x-ref="panel" @click.away="open = false">
				<div class="">
					
					<ul>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Blog list
							</a>
						</li>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Blog grid
							</a>
						</li>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Standard Post
							</a>
						</li>
						<li class="border-b px-4 py-2">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Gellary Post
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Audio Post
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Video Post
							</a>
						</li>
						<li class="border-b  px-4 py-2">
							<a href="#"class="text-sm font-medium hover:text-red-500">
								Quat Post
							</a>
						</li>
					</ul>
				</div>
			  </div>
			</div>
			<div>
			  <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
			  <button type="button" class=" group inline-flex items-center text-sm font-medium  " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
				<span>Contact</span>
			  </button>
			</div>
			<div class=" flex block items-center justify-end">
					<div class="flex">
						<button type="button" class="rounded-full text-secondary-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
						</svg>
						</button>
						<button type="button" class="rounded-full text-secondary-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
						</svg>

						</button>
						<button type="button" class="rounded-full text-secondary-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
						  <!-- Heroicon name: outline/bell -->
						  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:stroke-rose-500 duration-200">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
						  </svg>
						  <span class="inline-flex absolute justify-center items-center text-white bg-blue-500  h-5 w-5  rounded-full  -mt-8">0</span>
						</button>
						<button type="button" class="rounded-full text-secondary-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
						  <!-- Heroicon name: outline/bell -->
						  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
						</svg>
						</button>
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
				  <img class="h-12 w-full" src="<?php echo $baseurl;?>images/demo/logo.png" alt="">
				</a>
			</div>
			<div class="">
				<div class=" flex relative py-3 sm:max-w-xl mx-auto">
					<div>
						<button type="button" class="rounded-full text-secondary-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
						</svg>
						</button>
						<button type="button" class="rounded-full text-secondary-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
						</svg>

						</button>
						<button type="button" class="rounded-full text-secondary-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
						  <!-- Heroicon name: outline/bell -->
						  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:stroke-rose-500 duration-200">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
						  </svg>
						  <span class="inline-flex absolute justify-center items-center text-white bg-blue-500  h-5 w-5  rounded-full  -mt-8">0</span>
						</button>
						<button type="button" class="rounded-full text-secondary-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
						  <!-- Heroicon name: outline/bell -->
						  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
						</svg>
						</button>
					</div>
						<div class="text-end">
						   <button class="rounded-full text-secondary-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400" type="button" data-drawer-target="offcanvas" data-drawer-show="offcanvas" aria-controls="offcanvas">
						   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
							</svg>
						   </button>
						</div>
				</div>
			</div>
		</div>
	<!-- drawer component -->
	<div id="offcanvas" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="offcanvas-label">
		<h5 id="offcanvas-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
		<button type="button" data-drawer-hide="offcanvas" aria-controls="offcanvas" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
			<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
			<span class="sr-only">Close menu</span>
		</button>
	  <div class="py-4 overflow-y-auto">
		  <ul class="space-y-2 font-medium">
			 <li>
				<a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
				   <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
				   <span class="ml-3">Dashboard</span>
				</a>
			 </li>
			 <li>
				<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
					  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
					  <span class="flex-1 ml-3 text-left whitespace-nowrap">E-commerce</span>
					  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
				</button>
				<ul id="dropdown-example" class="hidden py-2 space-y-2">
					  <li>
						 <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
					  </li>
					  <li>
						 <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
					  </li>
					  <li>
						 <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
					  </li>
				</ul>
			 </li>
			 <li>
				<a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
				   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
				   <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
				   <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
				</a>
			 </li>
			 <li>
				<a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
				   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
				   <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
				   <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
				</a>
			 </li>
			 <li>
				<a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
				   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
				   <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
				</a>
			 </li>
			 <li>
				<a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
				   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
				   <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
				</a>
			 </li>
			 <li>
				<a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
				   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
				   <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
				</a>
			 </li>
			 <li>
				<a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
				   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
				   <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
				</a>
			 </li>
		  </ul>
	   </div>
	</div>
  </div>
</header>


