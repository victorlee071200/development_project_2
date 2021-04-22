<x-app-layout title="Support">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Support') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <body class="font-nunito antialiased bg-gray-100 text-gray-900 my-16 flex items-center justify-center">

                    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">

                        <div class="main-title my-8">
                            <h1 class="font-bold text-2xl text-center">How can we help you?</h1>
                        </div>

                        <div  x-data class="main-search mb-8 rounded-lg shadow-lg px-6 py-3 w-full flex items-center space-x-6 border border-gray-200 border-opacity-75">
                            <button class=" focus:outline-none" @click="$refs.search.focus()">
                                <svg
                                    class="w-6 h-6 text-gray-500"
                                    fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                            <input x-ref="search" type="text" placeholder="Describe your issue" class="text-base w-full bg-transparent focus:outline-none">
                        </div>

                        <div class="main-question mb-8 flex flex-col divide-y text-gray-800 text-base">
                            <div class="item px-6 py-6" x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Popular articles</h4>
                                    <svg
                                        class="w-5 h-5 text-gray-500"
                                        fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                                </div>
                            </div>

                            <div class="item px-6 py-6" x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Fix problems & request removals</h4>
                                    <svg
                                        class="w-5 h-5 text-gray-500"
                                        fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                                </div>
                            </div>

                            <div class="item px-6 py-6" x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Browse the web</h4>
                                    <svg
                                        class="w-5 h-5 text-gray-500"
                                        fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                                </div>
                            </div>

                            <div class="item px-6 py-6" x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Search on your phone or tablet</h4>
                                    <svg
                                        class="w-5 h-5 text-gray-500"
                                        fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                                </div>
                            </div>
                        </div>

                        <div class="main-images mb-8  ">
                            <div class="images md:grid-cols-3 gap-8">
                                <div class="image bg-white rounded-lg shadow-lg overflow-hidden">
                                    <a href="/client/create/support">
                                        <img src="https://images.unsplash.com/photo-1570447926106-8888f858b0bb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80" alt="Send a support ticket" title="Send a support ticket">
                                        <span class="text-center p-2 text-gray-700 text-sm inline-block w-full">Send a support ticket</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
                </body>

            </div>
        </div>
    </div>
</x-app-layout>
