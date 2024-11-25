<aside id="separator-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('resort.dashboard') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li x-data="{ isOpen: '{{ in_array(Route::currentRouteName(), ['resort.booking', 'booking.event']) ? 'true' : 'false' }}' == 'true' }">
                <button @click="isOpen = !isOpen"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-full">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="ms-3 whitespace-nowrap">Booking</span>
                    <svg class="w-4 h-4 ml-auto transition-transform transform" :class="{ 'rotate-180': isOpen }"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <ul x-show="isOpen" x-transition:enter="transition-all ease-in-out duration-300"
                    x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                    x-transition:leave="transition-all ease-in-out duration-300"
                    x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                    class="space-y-2 pl-8 mt-2 overflow-hidden text-sm text-gray-700 dark:text-gray-400">
                    <li>
                        <a href="{{ route('resort.booking') }}"
                            class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 {{ Route::currentRouteName() == 'resort.booking' ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                            <span class="flex-1 ms-3 whitespace-nowrap">Room</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('booking.event') }}"
                            class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 {{ Route::currentRouteName() == 'booking.event' ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                            <span class="flex-1 ms-3 whitespace-nowrap">Event</span>
                        </a>
                    </li>

                </ul>
            </li>



            <li>
                <a href="{{ route('resort.room') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Rooms</span>

                </a>
            </li>
            <li>
                <a href="{{ route('resort.event') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M17 3h-1V2a1 1 0 1 0-2 0v1H6V2a1 1 0 1 0-2 0v1H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Zm0 14H3V8h14v9ZM3 6V5h1v1a1 1 0 1 0 2 0V5h8v1a1 1 0 1 0 2 0V5h1v1H3Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Event</span>
                </a>
            </li>
            <li x-data="{ isOpen: '{{ in_array(Route::currentRouteName(), ['resort.category', 'resort.menus']) ? 'true' : 'false' }}' == 'true' }">
                <button @click="isOpen = !isOpen"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-full">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M17 3h-1V2a1 1 0 1 0-2 0v1H6V2a1 1 0 1 0-2 0v1H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Zm0 14H3V8h14v9ZM3 6V5h1v1a1 1 0 1 0 2 0V5h8v1a1 1 0 1 0 2 0V5h1v1H3Z" />
                    </svg>
                    <span class="ms-3">Menus</span>
                    <svg class="w-4 h-4 ml-auto transition-transform transform" :class="{ 'rotate-180': isOpen }"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <ul x-show="isOpen" x-transition:enter="transition-all ease-in-out duration-300"
                    x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                    x-transition:leave="transition-all ease-in-out duration-300"
                    x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                    class="space-y-2 pl-8 mt-2 overflow-hidden text-sm text-gray-700 dark:text-gray-400">
                    <li>
                        <a href="{{ route('resort.category') }}"
                            class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 {{ Route::currentRouteName() == 'resort.category' ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                            <span class="flex-1 ms-3 whitespace-nowrap">Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('resort.menus') }}"
                            class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 {{ Route::currentRouteName() == 'resort.menus' ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                            <span class="flex-1 ms-3 whitespace-nowrap">Menus</span>
                        </a>
                    </li>


                </ul>
            </li>

            <script src="//unpkg.com/alpinejs" defer></script>


            <li>
                <a href="{{ route('resort.post') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M17 3h-1V2a1 1 0 1 0-2 0v1H6V2a1 1 0 1 0-2 0v1H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Zm0 14H3V8h14v9ZM3 6V5h1v1a1 1 0 1 0 2 0V5h8v1a1 1 0 1 0 2 0V5h1v1H3Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Post</span>
                </a>
            </li>

            <li>
                <a href="{{ route('resort.review') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M17 3h-1V2a1 1 0 1 0-2 0v1H6V2a1 1 0 1 0-2 0v1H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Zm0 14H3V8h14v9ZM3 6V5h1v1a1 1 0 1 0 2 0V5h8v1a1 1 0 1 0 2 0V5h1v1H3Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Review</span>
                </a>
            </li>

            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                </a>
            </li>

        </ul>
    </div>
</aside>