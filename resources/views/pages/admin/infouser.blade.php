<!doctype html>
<html>

<head>
    <x-app />
</head>

<body>
    <div class="h-full bg-purple-50">

        <!-- Navbar  Section -->
        <nav class="bg-white border-gray-200 dark:bg-gray-900 navigation-bar pr-5">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/dashboard" class="flex items-center">
                    <img src="{{ asset('img/asset-logo.svg') }}" class="h-8 mr-3" alt="FlexF Logo" />
                    <span
                        class="self-center text-2xl font-bold whitespace-nowrap text-purple-950 dark:text-white">FlexF.</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-purple-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/profileadmin/{{ Auth::user()->id_user }}"
                                class="font-medium block py-2 pl-3 pr-4 text-purple-950 rounded md:bg-transparent md:text-purple-950 md:p-0 mr-6 hover:bg-white md:hover:text-purple-500"
                                aria-current="page">Profile</a>
                        </li>
                        <li>
                            <a href="/registrasiakun"
                                class="font-medium block py-2 pl-3 pr-4 text-purple-950 rounded md:bg-transparent md:text-purple-950 md:p-0 mr-6 hover:bg-white md:hover:text-purple-500"
                                aria-current="page">Registrasi Akun</a>
                        </li>
                        <li>
                            <a href="/infouser"
                                class="font-medium block py-2 pl-3 pr-4 text-purple-950 rounded md:bg-transparent md:text-purple-950 md:p-0 mr-6 hover:bg-white md:hover:text-purple-500"
                                aria-current="page">Informasi User</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="font-medium flex items-center justify-between w-full py-2 pl-3 pr-4 text-purple-950 rounded hover:bg-white md:hover:bg-transparent md:border-0 md:hover:text-purple-500 md:p-0 md:w-auto dark:text-white md:dark:hover:text-purple-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                                Aplikasi
                                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                  <li>
                                    <a href="/keluarmasukdash" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keluar Masuk</a>
                                  </li>
                                  <li>
                                    <a href="/pinjamdash" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Peminjaman</a>
                                  </li>
                                  <li>
                                    <a href="/inventarisdash" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Inventaris</a>
                                  </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar  Section -->

        <!-- Card -->
        <div class="mx-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 mb-4 mt-4 p-6">
                @foreach ($user as $u)
                <div class="max-w-xs bg-white border border-purple-900 rounded-lg dark:bg-gray-800 dark:border-gray-700 shadow-lg flex flex-col items-center justify-center">
                    <img class="p-4 h-56 rounded-3xl" src="{{ url('/image/' . $u->profile_image) }}" alt="profile image" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $u->name }}
                        </h5>
                        <h5 class="mb-3 font-normal text-lg text-gray-600 dark:text-gray-400 tracking-tight">
                            {{ $u->email }}
                        </h5>
                        <h5 class="mb-3 font-semibold text-md text-gray-700 dark:text-gray-400 tracking-tight">
                                    @if ($u->role === 'user')
                                        <span class="text-cyan-500">{{ $u->role }}</span>
                                    @elseif($u->role === 'operator')
                                        <span class="text-yellow-900">{{ $u->role }}</span>
                                    @elseif($u->role === 'admin')
                                        <span class="text-purple-900">{{ $u->role }}</span>
                                    @elseif($u->role === 'superadmin')
                                        <span class="text-green-900">{{ $u->role }}</span>
                                    @else
                                        {{ $u->role }}
                                    @endif
                        </h5>
                        <p class="mb-3 font-normal text-gray-400 text-sm dark:text-gray-400 tracking-tight">
                            {{ $u->jabatan }}
                        </p>
                        <a href="/infouser/edit/{{ $u->id_user }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                            Edit
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                            Delete
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
             </div>
        </div>
        <!-- Card -->

    </div>

</body>

</html>
