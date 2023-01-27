<!-- Header Part -->
  <header class="bg-gray-100">
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
	 <nav x-data="accordion(6)" class="  flex flex-wrap items-center justify-between w-full px-4 py-5 tracking-wide bg-white shadow-md bg-white bg-opacity-90 md:py-8 md:px-8 lg:px-14">
    <!-- Left nav -->
    <div class="flex items-center">
      <a href="#" class="text-3xl tracking-wide">
        Navbar
      </a>
    </div>
    <!-- End left nav -->

    <!-- Right nav -->
    <!-- Show menu sm,md -->
    <!-- Toggle button -->
    <div @click="handleClick()" x-data="{open : false}" class="block text-gray-600 cursor-pointer lg:hidden">
      <button @click="open = ! open" class="w-6 h-6 text-lg">
        <svg x-show="! open" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" :clas="{'transition-full each-in-out transform duration-500':! open}">
          <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
          <path d="M7.94977 11.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M7.94977 23.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M7.94977 35.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>

        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>
    <!-- End toggle button -->

    <!-- Toggle menu -->
    <div x-ref="tab" :style="handleToggle()" class="relative w-full overflow-hidden transition-all duration-700 lg:hidden max-h-0">
      <div class="flex flex-col my-3 space-y-2 text-lg hover:font-b text-gray-600">
        <a href="#" class="hover:text-gray-900"><span>Link</span></a>
        <hr>
        <a href="#" class="hover:text-gray-900"><span>Link</span></a>
        <hr>
        <a href="#" class="hover:text-gray-900"><span>Link</span></a>
      </div>
      <div class="py-6 px-5 space-y-6">
        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            About
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Contact
          </a>
        </div>
      </div>
      <div>
        <a href="#" class="w-full flex items-center justify-center text-white px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gray-600 hover:bg-gray-700">
          Sign up
        </a>
        <p class="mt-6 text-center text-base font-medium text-gray-500">
          Existing customer?
          <a href="#" class="text-gray-600 hover:text-gray-900">
            Sign in
          </a>
        </p>
      </div>
    </div>
    <!-- End toggle menu -->
    <!-- End show menu sm,md -->

    <!-- Show Menu lg -->
    <div class="hidden w-full lg:flex lg:items-center lg:w-auto">
      <div class="items-center flex-1 pt-6 justify-center text-lg text-gray-500 lg:pt-0 list-reset lg:flex">
        <div class="mr-3">
          <a href="#" class="inline-block px-4 py-2 no-underline hover:text-gray-900 text-gray-600">
            Link
          </a>
        </div>

        <div class="mr-3">
          <a href="#" class="inline-block px-4 py-2 no-underline hover:text-gray-900 text-gray-600">
            Link
          </a>
        </div>

        <!-- Dropdown 1 -->
        <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block" :class="{'text-gray-900': open, 'text-gray-600': !open }">
          <!-- Dropdown Toggle Button -->
          <button @mouseover="open = true" class="flex items-center p-2 rounded-md">
            <span class="mr-4">Hover Dropdown</span>
            <span :class="open = ! open ? '': '-rotate-180'" class="transition-transform duration-500 transform">
              <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </span>
          </button>
          <!-- End Dropdown Toggle Button -->

          <!-- Dropdown Menu -->
          <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="absolute right-0 py-1 text-gray-500 bg-white rounded-lg shadow-xl min-w-max">
            <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Lorem, ipsum.</a>
            <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Lorem, ipsum dolor.</a>
            <a href="#" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Lorem ipsum dolor sit amet.</a>
          </div>
          <!-- End Dropdown Menu -->
        </div>
        <!-- End Dropdown 1 -->
      </div>
    </div>
    <div class="hidden w-full lg:flex lg:items-center lg:w-auto">
      <div class="items-center flex-1 pt-6 justify-center text-lg text-gray-500 lg:pt-0 list-reset lg:flex">
        <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
          Sign in
        </a>
        <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gray-600 hover:bg-gray-700">
          Sign up
        </a>
      </div>
    </div>
    <!-- End show Menu lg -->
    <!-- End right nav -->
  </nav>
  <script>
    // Faq
    document.addEventListener('alpine:init', () => {
      Alpine.store('accordion', {
        tab: 0
      });
      Alpine.data('accordion', (idx) => ({
        init() {
          this.idx = idx;
        },
        idx: -1,
        handleClick() {
          this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
          return this.$store.accordion.tab === this.idx ? '-rotate-180' : '';
        },
        handleToggle() {
          return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
      }));
    })
    //  end faq
  </script>
	
</html>
  </header>


