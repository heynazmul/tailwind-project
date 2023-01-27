
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
		<div class="flex items-center justify-between py-6 md:justify-start px-24 md:space-x-8 bg-gray-100">
		  <div class="shrink-0 whitespace-nowrap">
			<a href="#">
			  <span class="sr-only">Your Company</span>
			  <img class="h-10 w-auto block shrink-0 " src="images/demo/logo.png" alt="">
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
			  <button type="button" class=" group inline-flex items-center text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()">
				<span>About</span>
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
			  <button type="button" class=" group inline-flex items-center text-sm font-medium hover:text-red-700 " @click="open =! open" @mousedown="if (open) $event.preventDefault()">
				<span>DASHBOARD</span>
				<svg x-state:on="Item active" x-state:off="Item inactive" class="h-4 w-4 group-hover:text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			  </button>
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-9 border-t-2 border-red-500 bg-white w-48" x-ref="panel" @click.away="open = false">
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
			  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="border-t-2 border-red-500 bg-white absolute z-10 mt-8 w-screen max-w-6xl transform md:-translate-x-3/4" x-ref="panel" @click.away="open = false">
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
				  <img class="h-12 w-full" src="images/demo/logo.png" alt="">
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
							<div class="col-span-12 sm:col-span-8">
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
							<div class="col-span-12 sm:col-span-8">
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
							<div class="col-span-12 sm:col-span-8">
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


