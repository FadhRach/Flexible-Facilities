<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body>
        <div class="h-full">
            <!-- Navbar  Sectionm-->
            <nav class="bg-white border-purple-50 dark:bg-gray-900 navigation-bar">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/dashboarduser" class="flex items-center">
                    <img src="{{ asset('img/asset-logo.svg') }}" class="h-8 mr-3" alt="FlexF Logo" />
                    <span class="self-center text-2xl font-bold whitespace-nowrap text-purple-950 dark:text-white">FlexF.</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-purple-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/pinjamuser" class="block py-2 pl-3 pr-4 text-purple-950 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-700 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pinjam Sarpras</a>
                        </li>
                        <li>
                            <a href="/response" class="block py-2 pl-3 pr-4 text-purple-950 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-700 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Permohonan Sarpras</a>
                        </li>
                        <li>
                            <a href="/lihatdata" class="block py-2 pl-3 pr-4 text-purple-950 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-700 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Data Sarpras</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>

            <!-- Card Section -->
            <section class="bg-gray-50 flex items-center justify-center p-2 card-bar">
                <div class="w-full max-w-sm bg-white border border-purple-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="px-6 py-6 lg:px-8">
                        @foreach ($user as $item)
                        <div class="flex justify-center">
                            <h3 class="mb-7 text-xl font-medium text-gray-900 dark:text-white"><span class="italic mr-3">{{ $item->name }}'s</span>Profile.</h3>
                        </div>
                        <form class="space-y-6" action="#">
                                <div class="flex justify-center">
                                    <img src="{{ url('/image/' . Auth::user()->profile_image) }}" alt="" class="h-36 rounded-full mb-5">
                                </div>
                                <div>

                                        <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                        <div class="flex">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-purple-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                                                </svg>
                                            </span>
                                            <input type="text" id="website-admin" aria-label="disable input" class="rounded-none rounded-r-lg bg-gray-50 border border-purple-300 text-gray-900 focus:ring-purple-500 focus:border-purple-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500 cursor-not-allowed" placeholder="{{ $item->name }}" readonly>
                                        </div>

                                </div>
                                <div>
                                    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <div class="flex">
                                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-purple-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                                        </svg>
                                    </span>
                                    <input type="text" id="website-admin" aria-label="disable input" class="rounded-none rounded-r-lg bg-gray-50 border border-purple-300 text-gray-900 focus:ring-purple-500 focus:border-purple-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500 cursor-not-allowed" placeholder="{{ $item->email }}" readonly>
                                    </div>
                                </div>
                                <div>
                                    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                                    <div class="flex">
                                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-purple-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                        </svg>
                                    </span>
                                    <input type="text" id="website-admin" aria-label="disable input" class="rounded-none rounded-r-lg bg-gray-50 border border-purple-300 text-gray-900 focus:ring-purple-500 focus:border-purple-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500 cursor-not-allowed" placeholder="{{ $item->role }}" readonly>
                                    </div>
                                </div>
                        @endforeach
                        </form>
                    </div>
                </div>
                </div>
            </section>
        </div>
    </body>
</html>
