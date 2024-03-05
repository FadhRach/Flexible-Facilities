<!DOCTYPE html>
    <html>
        <head>
            <x-app />
        </head>

        <body>

            <!-- Start Navbar-->
            <header class="fixed w-full z-50">
                <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
                    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                        <a href="/dashboarduser" class="flex items-center">
                            <img src="{{ asset('img/asset-logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="FlexF Logo" />
                            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">FlexF</span>
                        </a>
                        <div class="flex items-center lg:order-2">
                            <a href="/logout"
                                class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Log
                                Out</a>
                            <button data-collapse-toggle="mobile-menu-2" type="button"
                                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                aria-controls="mobile-menu-2" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                <li>
                                    <a href="/pinjamuser"
                                        class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 text-purple-950 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-semibold">Pinjam Sekarang.</a>
                                </li>
                                <li>
                                    <a href="/response"
                                        class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 text-purple-950 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-semibold">Permohonan Sarpras.</a>
                                </li>
                                <li>
                                    <a href="/lihatdata"
                                        class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 text-purple-950 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-semibold">Lihat Data.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <!-- Start Hero -->
            <section class="bg-white dark:bg-gray-900">
                <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                    <div class="lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="{{ asset('img/asset-user.png') }}" alt="hero image">
                    </div>
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1
                            class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                            Peminjaman Sarpras <br>SMKN 1 Cimahi.</h1>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                            ingin meminjam sarpras atau barang dari sekolah ? click link dibawah ini untuk melanjutkan, dan pinjam !</p>
                        <div class="flex items-center lg:order-2">
                            <a href="/pinjamuser" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Pinjam Sekarang !</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Hero -->

            <!-- Start Hero -->
            <section class="bg-white dark:bg-gray-900 mt-4 mb-14">
                <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1
                            class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                            Permohonan <br>Sarpras.</h1>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                            ingin menambahkan sarpras atau barang ? click link di bawah ini untuk melanjutkan, dan lakukan permohonan</p>
                        <div class="flex items-center lg:order-2">
                            <a href="/response" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Lakukan Permohonan !</a>
                        </div>
                    </div>
                    <div class="lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="{{ asset('img/asset-user2.png') }}" alt="hero image">
                    </div>
                </div>
            </section>
            <!-- End Hero -->

            <!-- Start Hero -->
            <section class="bg-white dark:bg-gray-900">
                <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                    <div class="lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="{{ asset('img/asset-descbg.png') }}" alt="hero image">
                    </div>
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1
                            class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                            Lihat Data Sarpras <br>SMKN 1 Cimahi.</h1>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                            Penasaran dengan data sarpras yang dimiliki Sarpras SMKN 1 Cimahi ? Click link untuk melihat !</p>
                        <div class="flex items-center lg:order-2">
                            <a href="/lihatdata" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Lihat Sekarang !</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Hero -->

            <!-- Start Footer -->
            <footer class="bg-white dark:bg-gray-800">
                <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
                    <div class="text-center">
                        <span href="#"
                            class="flex items-center justify-center mb-5 text-2xl font-bold text-gray-900 dark:text-white">
                            <img src="{{ asset('img/asset-logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="FlexF Logo" />
                            FlexF
                        </span>
                        <span class="block text-sm text-center text-gray-500 dark:text-gray-400">FlexF in collaboration with
                            Smkn 1, thanks to <a href="/"
                                class="text-purple-600 hover:underline dark:text-purple-500">Flexf</a> and <a
                                href="https://www.smkn1-cmi.sch.id/" class="text-purple-600 hover:underline dark:text-purple-500">Smk
                                1</a>.
                        </span>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
        </body>
</html>
