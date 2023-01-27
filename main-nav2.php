<!-- Header Part -->
  <header class="">
      <nav aria-label="Top" class=" mx-auto max-w-8xl px-4 sm:px-6 lg:px-8">
      <div class="px-12">
        <div class="flex h-10 items-center">
          <div class="lg:pl-8 hidden md:block">
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
			<div class="ml-auto flex items-end">
			  <div class="md:pr-2">
				<ul class="flex space-x-5">
					<li class="">
						<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
						<span class="px-1">Help</span>
						</a>
					</li>
					<li class="hidden lg:block">
						<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
						<span class="px-1.5">join us</span>
						</a>
					</li>
					<li class="hidden lg:block">
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
	
	<div class=" bg-white" x-data="Components.popover({ open: true, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
	  <div class="mx-auto max-w-8xl">
		<div class="flex items-center  py-6 md:justify-center px-28 md:space-x-10 bg-gray-100">
		  <div class="flex justify-start lg:w-0 lg:flex-1">
			<a href="#">
			  <img class="h-8 w-auto sm:h-10" src="images/demo/logo.png" alt="">
			</a>
		  </div>
		  <div class="-my-2 -mr-2 md:hidden">
			<button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
			  <span class="sr-only">Open menu</span>
			  <!-- Heroicon name: outline/bars-3 -->
			  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
			  </svg>
			</button>
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
			<button type="button" class="rounded-full text-blue-700 bg-slate-100 p-3 text-gray-400 group-hover:bg-rose-100 duration-200 mr-5" @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
			  <!-- Heroicon name: outline/bell -->
			  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-hover:stroke-rose-500 duration-200">
			  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
			  </svg>
			  <span class="inline-flex absolute justify-center align-center text-white bg-blue-500  h-5 w-5  rounded-full  -mt-8">0</span>
			</button>
		</div>
	  </div>
  <!--
    Mobile menu, show/hide based on mobile menu state.
  -->
  <div x-show="open" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden" x-ref="panel" @click.away="open = false" style="display: none;">
    <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
      <div class="px-5 pt-5 pb-6">
        <div class="flex items-center justify-between">
          <div>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
          </div>
          <div class="-mr-2">
            <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="toggle">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x-mark -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-6">
          <nav class="grid gap-y-8">
            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">Analytics</span>
            </a>

            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
              <!-- Heroicon name: outline/cursor-arrow-rays -->
              <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">Engagement</span>
            </a>

            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
              <!-- Heroicon name: outline/shield-check -->
              <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">Security</span>
            </a>

            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
              <!-- Heroicon name: outline/squares-2x2 -->
              <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">Integrations</span>
            </a>

            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
              <!-- Heroicon name: outline/arrow-path -->
              <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12c0-1.232.046-2.453.138-3.662a4.006 4.006 0 013.7-3.7 48.678 48.678 0 017.324 0 4.006 4.006 0 013.7 3.7c.017.22.032.441.046.662M4.5 12l-3-3m3 3l3-3m12 3c0 1.232-.046 2.453-.138 3.662a4.006 4.006 0 01-3.7 3.7 48.657 48.657 0 01-7.324 0 4.006 4.006 0 01-3.7-3.7c-.017-.22-.032-.441-.046-.662M19.5 12l-3 3m3-3l3 3" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">Automations</span>
            </a>
          </nav>
        </div>
      </div>
      <div class="space-y-6 py-6 px-5">
        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Help Center</a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Guides</a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Events</a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Security</a>
        </div>
        <div>
          <a href="#" class="flex w-full items-center justify-center rounded-md  bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
          <p class="mt-6 text-center text-base font-medium text-gray-500">
            Existing customer?
            <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
	
	
	
	
	
	
	
  </header>


