<!DOCTYPE html>
<html>
    <head>
        <x-app />
    </head>

    <body>
        <!-- Start Navbar -->
        <header class="fixed w-full">
            <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('img/asset-logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="FlexF logo" />
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">FlexF</span>
                    </a>
                <div class="flex items-center">
                    <a href="/login" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Login</a>
                </div>
                </div>
            </nav>
        </header>
        <!-- End Navbar -->

        <!-- Start Hero -->
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1
                        class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                        Flexible Facilities + <br>SMKN 1 Cimahi.</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                        Selamat datang, di aplikasi srana dan prasana sekolah smkn 1 cimahi, <br> silahkan login untuk
                        mengakses fitur yang tersedia.</p>
                    <div class="flex items-center lg:order-2">
                        <a href="/login" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Login, dan akses fiturnya !</a>
                    </div>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="{{ asset('img/asset-herp.png') }}" alt="hero image">
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <!-- Start block -->
        <section class="bg-gray-100 dark:bg-gray-800">
            <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
                <!-- Row -->
                <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                    <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Tersedia Dalam Aplikasi Mobile !</h2>
                        <p class="mb-8 font-light lg:text-xl">Download aplikasi mobile dari flexf untuk meminjam sarpras / melihat inventaris barang / memsukkan form, semua dalam genggaman, download dengan link di bawah</p>
                        <!-- List -->
                        <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Aplikasi Inventaris Barang</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Aplikasi Peminjaman Sarpras</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Aplikasi Keluar Masuk Barang</span>
                            </li>
                        </ul>
                        <a href="https://drive.google.com/drive/my-drive"
                            class="inline-flex items-center justify-center w-7 px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            <img src="{{ asset('img/asset-gdrive.svg') }}" alt="GoogleDrive Logo" class="w-4 h-4 mr-3"> Google Drive
                        </a>
                    </div>
                    <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('img/asset-landingfeatures.png') }}"
                        alt="dashboard feature image">
                </div>
            </div>
        </section>
        <!-- End block -->

        <!-- Start Footer -->
        <footer class="bg-gray-50 dark:bg-gray-800">
            <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
                <div class="text-center">
                    <span class="flex items-center justify-center mb-5 text-2xl font-bold text-gray-900 dark:text-white">
                        <img src="{{ asset('img/asset-log.svg') }}" class="h-6 mr-3 sm:h-9" alt="FlexF Logo" />
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
    </body>
</html>
