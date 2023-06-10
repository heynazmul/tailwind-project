
  <!--
    Mobile menu, show/hide based on mobile menu state.
  -->
<!-- mobile navBar -->
<section class="px-4 sm:px-8 md:px-16 lg:px-28 mx-auto ">
    <div x-data="{ open: false }" @keydown.window.escape="open = false" class=" my-5 mr-2 lg:hidden">
        <div class="flex items-center justify-between">
            <div>
                <a href="#">
                    <span class="sr-only">Your Company</span>
                    <img class="h-12 w-full" src="<?php echo $baseurl; ?>images/demo/logo.png" alt="">
                </a>
            </div>
            <div class="">
                <div class=" flex relative py-3 sm:max-w-xl mx-auto">
                        <button type="button" class="rounded-full text-gray-700 hover:text-white hover:bg-pink-500   duration-700 ease-in-out  h-10 w-10 flex justify-center items-center " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>

                        </button>
                        <button type="button" class="rounded-full text-gray-700 hover:text-white hover:bg-pink-500   duration-700 ease-in-out  h-10 w-10 flex justify-center items-center " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        </button>
                        <button type="button" class="rounded-full text-gray-700 hover:text-white hover:bg-pink-500 duration-700 ease-in-out  h-10 w-10 flex justify-center items-center " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>

                        <span class="inline-flex absolute justify-center items-center text-white bg-blue-500  h-4 w-4  rounded-full right-11 -mt-5">3</span>
                        </button>
                        <!-- offcanvase open button -->
                    <div class="shrink-0 block lg:hidden">
                        <button type="button" class="rounded-full text-gray-500 hover:text-white hover:bg-pink-500  transition duration-700 ease-in-out h-10 w-10 flex justify-center items-center" @click="open = true">
                            <span class="sr-only">offcanvases</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        </button>
                    </div>
                    <!-- end offcanvase open button -->
                </div>
            </div>
        </div>

        <!-- Mobile offcanvase dialog -->

        <div x-show="open" class="relative z-40 lg:hidden" x-ref="dialog" aria-modal="true" style="display: none;">

            <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/70" style="display: none;"></div>

            <div class="fixed inset-0 z-40 flex">

                <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl" @click.away="open = false" style="display: none;">
                    <!-- offcanvase close -->
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-lg font-medium text-gray-900">Title Category</h2>
                        <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400" @click="open = false">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- end offcanvase close -->

                    <!-- offcanvases -->
                    <form class="lg:hidden block lg:w-50 ">
                        <!-- start acordion -->
                        <!-- @click.away="storage = false" -->
                        <!-- color -->
                        <div x-data="{ color: false }" class=" mx-4 py-1 border-b border-gray-200 transition-all duration-400" :class="color? 'pb-3': ''" >
                            <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" @click="color = !color" >
                                <span class="font-medium text-gray-900">Color</span>
                                    <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="duration-300 transform w-6 h-6" :class="color = color ? 'transform rotate-180' : '' ">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                    </svg>
                            </button>
                            <div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="color" :style="color = color ?  'max-height: '+ $refs.color.scrollHeight + 'px' :'' ">
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <input id="offcanvase-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="offcanvase-color-0" class="ml-3 text-sm text-gray-600">White</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="offcanvase-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="offcanvase-color-1" class="ml-3 text-sm text-gray-600">Beige</label>
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
                                        <input id="offcanvase-brand-0" name="brand[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="offcanvase-brand-0" class="ml-3 text-sm text-gray-600">White</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="offcanvase-brand-1" name="brand[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="offcanvase-brand-1" class="ml-3 text-sm text-gray-600">Beige</label>
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
                                        <input id="offcanvase-storage-0" name="storage[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="offcanvase-storage-0" class="ml-3 text-sm text-gray-600">White</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="offcanvase-storage-1" name="storage[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="offcanvase-storage-1" class="ml-3 text-sm text-gray-600">Beige</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end storage -->
                    </form>

                </div>

            </div>
        </div>
        <!-- end Mobile offcanvase dialog -->
    </div>

    <!-- desktop navbar -->
    <div class="sticky top-0 z-50 " x-data="Components.popover({ open: true, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
        <div class=" lg:max-w-8xl hidden lg:block">
            <div class="p-4 flex items-center justify-between bg-gray-100 rounded-lg">
                <!-- icon/ logo -->
                <div class="shrink-0 whitespace-nowrap">
                    <a href="#">
                    <span class="sr-only">Your Company</span>
                    <img class="h-10 w-auto block shrink-0 " src=" <?php echo $baseurl; ?>images/demo/logo.png" alt="">
                    </a>
                </div>
                <div class="flex items-center  gap-x-8">
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

                    <div x-show="open" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-50 mt-5 bg-white w-48" x-ref="panel" @click.away="open = false">
                        <div class="">

                            <ul>
                                <li class="border-b px-4 py-4">
                                    <a href="<?php echo $baseurl; ?>index.php"class="text-sm font-medium hover:text-red-500">
                                        Home - Electronics
                                    </a>
                                </li>
                                <li class="border-b px-4 py-4">
                                    <a href="<?php echo $baseurl; ?>home-nft/index.php"class="text-sm font-medium hover:text-red-500">
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

                    <div x-show="open" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-5 bg-white w-48" x-ref="panel" @click.away="open = false">
                        <div class="">

                            <ul>
                                <li class="border-b px-4 py-2">
                                    <a href="<?php echo $baseurl; ?>shop/index.php"class="text-md font-medium hover:text-red-500">
                                        Shop with sidebar
                                    </a>
                                </li>
                                <li class="border-b px-4 py-2">
                                    <a href="<?php echo $baseurl; ?>shop-no-slidebar/index.php"class="text-md font-medium hover:text-red-500">
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
                    <div x-show="open" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-5 bg-white w-48" x-ref="panel" @click.away="open = false">
                        <div class="">

                            <ul>
                                <li class="border-b px-4 py-2">
                                    <a href="<?php $baseurl;?>wishlist/index.php"class="text-md font-medium hover:text-red-500">
                                        Wishlist
                                    </a>
                                </li>
                                <li class="border-b px-4 py-2">
                                    <a href="<?php $baseurl;?>cart/index.php"class="text-md font-medium hover:text-red-500">
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
                    <a href="<?php $baseurl;?>about/index.php"class="text-md font-medium">About</a>
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

                    <div x-show="open" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-5 bg-white w-48" x-ref="panel" @click.away="open = false">
                        <div class="">

                            <ul>
                                <li class="border-b px-4 py-2">
                                    <a href="<?php echo $baseurl; ?>blog/index.php"class="text-sm font-medium hover:text-red-500">
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
                    <!-- contact -->
                    <div>
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <a href="<?php echo $baseurl; ?>contact/index.php " class=" group inline-flex items-center text-sm font-medium">
                            Contact
                        </a>
                    </div>
                </div>
                <!-- user icon/link -->
                <div class=" flex block items-center justify-end">
                    <div class="flex">
                        <button type="button" class="rounded-full text-gray-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                        </button>
                        <button type="button" class="rounded-full text-gray-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                        </button>
                        <button type="button" class="rounded-full text-gray-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                            <!-- Heroicon name: outline/bell -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:stroke-rose-500 duration-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            <span class="inline-flex absolute justify-center items-center text-white bg-blue-500  h-5 w-5  rounded-full  -mt-8">0</span>
                        </button>
                        <button type="button" class="rounded-full text-gray-700 hover:text-white hover:bg-pink-500  transition duration-300 ease-in-out  p-3 text-gray-400 " @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
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
</section>

