
 <header class="relative z-50 px-4 sm:px-8 md:px-16 lg:px-28 mx-auto">
    <nav  class="sm:flex justify-between h-10 items-center">
        <div class="flex justify-center">
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
                                class="absolute left-0 mt-2.5 w-40 bg-white z-50">
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
    </nav>
</header>
