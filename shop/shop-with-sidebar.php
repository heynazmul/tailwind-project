
<!-- tailwind css component -->

<div class="bg-white container mx-auto">
	<div x-data="{ open: false }" @keydown.window.escape="open = false">
	  	<!-- Mobile filter dialog -->

		<div x-show="open" class="relative z-40 lg:hidden" x-ref="dialog" aria-modal="true" style="display: none;">

			<div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/70" style="display: none;"></div>

		  	<div class="fixed inset-0 z-40 flex">

				<div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl" @click.away="open = false" style="display: none;">
					<!-- filter close -->
					<div class="flex items-center justify-between px-4">
						<h2 class="text-lg font-medium text-gray-900">Title Category</h2>
						<button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400" @click="open = false">
							<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
							</svg>
						</button>
					</div>
					<!-- end filter close -->

					<!-- Filters -->
					<form class="lg:hidden block lg:w-50 ">
						<!-- start acordion -->
						<!-- @click.away="storage = false" -->
						<!-- color -->
						<div x-data="{ color: false }" class=" mx-4 py-1 border-b border-gray-200 transition-all duration-400" :class="color? 'pb-3': ''" >
							<button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="color = !color" >
								<span class="font-medium text-gray-900">Color</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(color)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="color" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="color" :style="color = color ?  'max-height: '+ $refs.color.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-color-0" class="ml-3 text-sm text-gray-600">White</label>
									</div>
									<div class="flex items-center">
										<input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-color-1" class="ml-3 text-sm text-gray-600">Beige</label>
									</div>
								</div>
							</div>
						</div>
						<!-- end color -->
						<!-- brand -->
						<div x-data="{ brand: false }" class=" mx-4 py-1 border-b border-gray-200 transition-all duration-400" :class="brand? 'pb-3': ''" >
							<button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="brand = !brand" >
								<span class="font-medium text-gray-900">brand</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(brand)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="brand" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="brand" :style="brand = brand ?  'max-height: '+ $refs.brand.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input id="filter-brand-0" name="brand[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-brand-0" class="ml-3 text-sm text-gray-600">White</label>
									</div>
									<div class="flex items-center">
										<input id="filter-brand-1" name="brand[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-brand-1" class="ml-3 text-sm text-gray-600">Beige</label>
									</div>
								</div>
							</div>
						</div>
						<!-- end brand -->
						<!-- storage -->
						<div x-data="{ storage: false }" class=" mx-4 py-1 border-b border-gray-200 transition-all duration-400" :class="storage? 'pb-3': ''" @click.away="storage = false" >
							<button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="storage = !storage" >
								<span class="font-medium text-gray-900">storage</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(storage)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="storage" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="storage" :style="storage = storage ?  'max-height: '+ $refs.storage.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input id="filter-storage-0" name="storage[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-storage-0" class="ml-3 text-sm text-gray-600">White</label>
									</div>
									<div class="flex items-center">
										<input id="filter-storage-1" name="storage[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
										<label for="filter-storage-1" class="ml-3 text-sm text-gray-600">Beige</label>
									</div>
								</div>
							</div>
						</div>
						<!-- end storage -->
					</form>

				</div>

			</div>
		</div>
		<!-- end Mobile filter dialog -->

	 	<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

			<div class="pb-24 pt-6">
				<!-- nav bar -->
				<div class="flex items-center justify-between my-6">
					<h1 class="shrink text-2xl font-semibold">Title of Category</h1>
					<div class="flex items-center gap-x-4">
						<div class="shrink-0 hidden md:flex items-center">
							show <b>&nbsp; 30 &nbsp;</b> of <b> &nbsp;10&nbsp; </b> par page
						</div>

						<select name="" id="" class="form-input appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-300 focus:ring-0">
							<option value="" selected>Short By</option>
							<option value="">Popular</option>
							<option value="">Low Quality</option>
							<option value="">High Quality</option>
						</select>

						<!-- filter open button -->
						<div class="shrink-0 block lg:hidden">
							<button type="button" class="text-gray-400 hover:text-gray-500" @click="open = true">
								<span class="sr-only">Filters</span>
								<svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd"></path>
								</svg>
							</button>
						</div>
						<!-- end filter open button -->
					</div>
				</div>
				<!-- nav bar -->
				<div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
					<!--desktop Filters -->
					<form class="hidden lg:block lg:w-50 ">
						<!-- start acordion -->
						<!-- @click.away="storage = false" -->
						<!-- color -->
						<div x-data="{ color: true }" class="py-1  transition-all duration-400" :class="color? 'pb-3': ''" >
							<button type="button" class=" border-b-2 border-blue-600 flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="color = !color" >
								<span class="text-xl text-gray-900">Title of Category</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(color)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="color" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 mt-3 overflow-hidden transition-all duration-300" x-ref="color" :style="color = color ?  'max-height: '+ $refs.color.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input disabled checked id="disabled-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 rounded-full">
										<label for="disabled-checked-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Disabled checked</label>
									</div>
									<div class="flex items-center mb-4">
										<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-full">
										<label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Sun care</label>
									</div>
									<div class="flex items-center mb-4">
										<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-full">
										<label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Sun care</label>
									</div>
									<div class="flex items-center mb-4">
										<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-full">
										<label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Sun care</label>
									</div>
									<div class="flex items-center mb-4">
										<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-full">
										<label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Sun care</label>
									</div>
									<div class="flex items-center mb-4">
										<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-full">
										<label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Sun care</label>
									</div>
									<div class="flex items-center mb-4">
										<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-full">
										<label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Sun care</label>
									</div>
									<div class="flex items-center mb-4">
										<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-full">
										<label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Sun care</label>
									</div>
									<div class="flex items-center mb-4">
										<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-full">
										<label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Sun care</label>
									</div>

								</div>
							</div>
						</div>
						<!-- end color -->
						<!-- Gender -->
						<div x-data="{ color: true }" class="py-1  transition-all duration-400" :class="color? 'pb-3': ''" >
							<button type="button" class=" border-b-2 border-blue-600 flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="color = !color" >
								<span class="text-xl text-gray-900">Gender</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(color)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="color" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 mt-3 overflow-hidden transition-all duration-300" x-ref="color" :style="color = color ?  'max-height: '+ $refs.color.scrollHeight + 'px' :'' ">
								<div class="space-y-4">
									<div class="flex items-center">
										<input disabled checked id="disabled-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 rounded-full">
										<label for="disabled-checked-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Men (64)</label>
									</div>
									<div class="flex items-center mb-4">
										<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-full">
										<label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Women (56)</label>
									</div>
									<div class="flex items-center mb-4">
										<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-full">
										<label for="disabled-checkbox" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">UniSex (50)</label>
									</div>
								</div>
							</div>
						</div>
						<!-- end gender -->
						<!-- Colors -->
						<div x-data="{ color: true }" class="py-1  transition-all duration-400" :class="color? 'pb-3': ''" >
							<button type="button" class=" border-b-2 border-blue-600 flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="color = !color" >
								<span class="text-xl text-gray-900">Colors</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(color)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="color" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="color" :style="color = color ?  'max-height: '+ $refs.color.scrollHeight + 'px' :'' ">
								<div class="flex max-h-0 z-50 gap-3 p-5 items-center overflow-hidden transition-all duration-300" x-ref="color" :style="color = color ?  'max-height: '+ $refs.color.scrollHeight + 'px' :'' ">
								<div class=" ">
									<input id="sky-radio" type="radio" value="" name="colosky-radio" class="w-4 h-4 text-sky-300 bg-sky-300 border-sky-300 focus:ring-sky-300 focus:ring-2 ">
								</div>
								<div class=" ">
									<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-pink-400 border-p-300 rounded-full">
								</div>
								<div class=" ">
									<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-pink-400 border-p-300 rounded-full">
								</div>
								<div class=" ">
									<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-pink-400 border-p-300 rounded-full">
								</div>
								<div class=" ">
									<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-pink-400 border-p-300 rounded-full">
								</div>
								<div class=" ">
									<input disabled id="disabled-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-pink-400 border-p-300 rounded-full">
								</div>
							</div>
							</div>
						</div>
						<!-- end Colors -->
						<!-- Button -->
						
						<!-- Colors -->
						<div x-data="{ color: true }" class="py-1  transition-all duration-400" :class="color? 'pb-3': ''" >
							<button type="button" class=" border-b-2 border-blue-600 flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="color = !color" >
								<span class="text-xl text-gray-900">Size</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(color)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="color" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="color" :style="color = color ?  'max-height: '+ $refs.color.scrollHeight + 'px' :'' ">
								<div class="mt-10">
									<nav class="isolate inline-flex flex-wrap gap-3 rounded-md shadow-sm" aria-label="Pagination">
										  <a href="#" class="bg-blue-600 text-white px-4 py-3 rounded-full">XS</a>
										  </a>
										  <a href="#" class="bg-white px-4 py-3 rounded-full border border-gray-200">M</a>
										  <a href="#" class="bg-white px-5 py-3 rounded-full border border-gray-200">L</a>
										  <a href="#" class="bg-white px-4 py-3 rounded-full border border-gray-200">ml</a>
										  <a href="#" class="bg-white px-4 py-3 rounded-full border border-gray-200">xxL</a>
										  <a href="#" class="bg-white px-4 py-3 rounded-full border border-gray-200">xxL</a>
										  <a href="#" class="bg-white px-4 py-3 rounded-full border border-gray-200">3xL</a>
									</nav>
								</div>
							</div>
						</div>
						<!-- end Button -->
						<!-- Range -->
						<div x-data="{ color: true }" class="py-1  transition-all duration-400" :class="color? 'pb-3': ''" >
							<button type="button" class=" border-b-2 border-blue-600 flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="color = !color" >
								<span class="text-xl text-gray-900">Size</span>
								<span class="ml-6 flex items-center">
									<svg class="h-5 w-5" x-show="!(color)" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
									</svg>
									<svg class="h-5 w-5"  x-show="color" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display: none;">
										<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd"></path>
									</svg>
								</span>
							</button>
							<div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="color" :style="color = color ?  'max-height: '+ $refs.color.scrollHeight + 'px' :'' ">
								<div class="mt-5">
								  <a href="#" class="bg-white px-4 py-3 rounded-full border border-gray-200">xxL</a>
								  <a href="#" class="bg-white px-4 py-3 rounded-full border border-gray-200">3xL</a>
								</div>
								<label for="small-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small range</label>
								<input id="small-range" type="range" value="50" class="w-full h-1 mb-6 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm dark:bg-gray-700">
							</div>
							<button type="button" class="font-bold text-white bg-blue-600 rounded mt-1 mx-2 px-8 py-4 hover:m-0 hover:px-10 hover:py-5 transition-all duraiton-700">All Reset</button>
						</div>
						<!-- end Button -->
					</form>

					<!-- Product grid -->
					<div class="w-full lg:col-span-3 z-50">
						<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10">
							<div class="w-full group">
								<div class="relative">
									<div class="absolute inset-0 w-20 left-auto z-50">
										<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-16 rounded shadow-lg shadow-blue-500/50">50%off</p>
									</div>
									
									<img class="absolute inset-0 w-full h-64 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0 object-cover" src="<?php echo $baseurl;?>images/demo/product-01.png" alt="">
									<img class="absolute inset-0  h-64 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="<?php echo $baseurl;?>images/demo/product-08.png" alt="">
									<div class="absolute inset-0 top-auto h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
										<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
											  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
											</svg>
										</div>
										<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
										<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
										</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="w-full group">
								<div class="relative">
									<div class="absolute top-0 right-0 z-50">
										<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-16 rounded shadow-lg shadow-blue-500/50">50%off</p>
									</div>
									<div class="relative h-72 w-72">
									  <img class="absolute h-64 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="<?php echo $baseurl;?>images/demo/product-01.png" alt="">
									  <img class="absolute  h-64 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="<?php echo $baseurl;?>images/demo/product-08.png" alt="">
									</div>
									<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
										<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
											  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
											</svg>
										</div>
										<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
										<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
										</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="w-full group">
								<div class="relative">
									<div class="absolute top-0 right-0 z-50">
										<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-16 rounded shadow-lg shadow-blue-500/50">50%off</p>
									</div>
									<div class="relative h-72 w-72">
									  <img class="absolute h-64 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="<?php echo $baseurl;?>images/demo/product-01.png" alt="">
									  <img class="absolute  h-64 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="<?php echo $baseurl;?>images/demo/product-08.png" alt="">
									</div>
									<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
										<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
											  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
											</svg>
										</div>
										<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
										<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
										</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="w-full group">
								<div class="relative">
									<div class="absolute top-0 right-0 z-50">
										<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-16 rounded shadow-lg shadow-blue-500/50">50%off</p>
									</div>
									<div class="relative h-72 w-72">
									  <img class="absolute h-64 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="<?php echo $baseurl;?>images/demo/product-01.png" alt="">
									  <img class="absolute  h-64 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="<?php echo $baseurl;?>images/demo/product-08.png" alt="">
									</div>
									<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
										<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
											  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
											</svg>
										</div>
										<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
										<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
										</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="w-full group">
								<div class="relative">
									<div class="absolute top-0 right-0 z-50">
										<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-16 rounded shadow-lg shadow-blue-500/50">50%off</p>
									</div>
									<div class="relative h-72 w-72">
									  <img class="absolute h-64 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="<?php echo $baseurl;?>images/demo/product-01.png" alt="">
									  <img class="absolute  h-64 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="<?php echo $baseurl;?>images/demo/product-08.png" alt="">
									</div>
									<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
										<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
											  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
											</svg>
										</div>
										<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
										<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
										</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="w-full group">
								<div class="relative">
									<div class="absolute top-0 right-0 z-50">
										<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-16 rounded shadow-lg shadow-blue-500/50">50%off</p>
									</div>
									<div class="relative h-72 w-72">
									  <img class="absolute h-64 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="<?php echo $baseurl;?>images/demo/product-01.png" alt="">
									  <img class="absolute  h-64 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="<?php echo $baseurl;?>images/demo/product-08.png" alt="">
									</div>
									<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
										<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
											  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
											</svg>
										</div>
										<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
										<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
										</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="w-full group">
								<div class="relative">
									<div class="absolute top-0 right-0 z-50">
										<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-16 rounded shadow-lg shadow-blue-500/50">50%off</p>
									</div>
									<div class="relative h-72 w-72">
									  <img class="absolute h-64 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="<?php echo $baseurl;?>images/demo/product-01.png" alt="">
									  <img class="absolute  h-64 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="<?php echo $baseurl;?>images/demo/product-08.png" alt="">
									</div>
									<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
										<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
											  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
											</svg>
										</div>
										<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
										<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
										</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="w-full group">
								<div class="relative">
									<div class="absolute top-0 right-0 z-50">
										<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-16 rounded shadow-lg shadow-blue-500/50">50%off</p>
									</div>
									<div class="relative h-72 w-72">
									  <img class="absolute h-64 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="<?php echo $baseurl;?>images/demo/product-01.png" alt="">
									  <img class="absolute  h-64 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="<?php echo $baseurl;?>images/demo/product-08.png" alt="">
									</div>
									<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
										<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
											  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
											</svg>
										</div>
										<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
										<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
										</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="w-full group">
								<div class="relative">
									<div class="absolute top-0 right-0 z-50">
										<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-16 rounded shadow-lg shadow-blue-500/50">50%off</p>
									</div>
									<div class="relative h-72 w-72">
									  <img class="absolute h-64 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="<?php echo $baseurl;?>images/demo/product-01.png" alt="">
									  <img class="absolute  h-64 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="<?php echo $baseurl;?>images/demo/product-08.png" alt="">
									</div>
									<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
										<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
											  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
											</svg>
										</div>
										<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
										<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
										</svg>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  	</div>
</div>
