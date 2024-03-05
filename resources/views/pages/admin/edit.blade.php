<!doctype html>
<html>

<head>
    <x-app />
</head>

<body>
    <div class="h-full">

        <!-- Navbar  Section-->
        <nav class="bg-white border-gray-200 dark:bg-gray-900 navigation-bar">
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

        <!-- Card Section -->
        <section class="bg-purple-50 flex items-center justify-center p-2 card-bar">
            <div
                class="w-full max-w-sm bg-white border border-purple-600 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-10 mb-10">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-7 text-xl font-medium text-gray-900 dark:text-white">Profile</h3>
                        <form class="space-y-6" method="post" action="/profile/edit/action/{{ $user->id_user }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                <img class="h-44 rounded-full mb-5 border border-purple-900 p-2" id="imagePreview"
                                    src="{{ isset($user) ? asset($user->profile_image) : 'https://www.its.ac.id/international/wp-content/uploads/sites/66/2020/02/blank-profile-picture-973460_1280-1.jpg' }}"
                                    alt="Profile Image">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Tambahkan Profile</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-400 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="imageInput" type="file" name="profile_image" placeholder="foto profile" value="{{ old('profile_image') }}" onchange="previewImage(this)">
                                @if ($errors->has('profile_image'))
                                    <div class="block w-full text-sm text-red-800 dark:bg-gray-800 dark:text-red-400" role="alert">
                                        {{ $errors->first('profile_image') }}
                                    </div>
                                @endif
                            </div>

                            <div>
                                <label for="website-admin"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-purple-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                        </svg>
                                    </span>
                                    <input type="text" id="website-admin" aria-label="disable input" name="name"
                                        class="rounded-none rounded-r-lg bg-gray-50 border border-purple-300 text-gray-900 focus:ring-purple-500 focus:border-purple-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
                                        placeholder="Name user" value="{{ $user->name }}">
                                </div>
                                @if ($errors->has('name'))
                                    <div class="block w-full text-sm text-red-800 dark:bg-gray-800 dark:text-red-400" role="alert">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <label for="website-admin"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-purple-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                            <path
                                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                        </svg>
                                    </span>
                                    <input type="text" id="website-admin" aria-label="disable input" name="email"
                                        class="rounded-none rounded-r-lg bg-gray-50 border border-purple-300 text-gray-900 focus:ring-purple-500 focus:border-purple-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
                                        placeholder="dummy@gmail.com" value="{{ $user->email }}">
                                </div>
                                @if ($errors->has('email'))
                                    <div class="block w-full text-sm text-red-800 dark:bg-gray-800 dark:text-red-400" role="alert">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <div>
                                <label for="website-admin"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-purple-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                        </svg>
                                    </span>
                                    <select id="countries" name="role"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                        <option selected class="text-gray-500">Pilih Role</option>
                                        <option value="user">user</option>
                                        <option value="operator">operator</option>
                                        <option value="admin">admin</option>
                                        <option value="superadmin">super admin</option>
                                    </select>
                                </div>
                                @if ($errors->has('role'))
                                    <div class="block w-full text-sm text-red-800 dark:bg-gray-800 dark:text-red-400" role="alert">
                                        {{ $errors->first('role') }}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <label for="website-admin"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                                <div class="flex mb-5">
                                    <span
                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-purple-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill="currentColor"
                                                d="m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z" />
                                            <path fill="#fff"
                                                d="M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z" />
                                        </svg>
                                    </span>
                                    <input type="text" id="website-admin" aria-label="disable input"
                                        name="jabatan"
                                        class="rounded-none rounded-r-lg bg-gray-50 border border-purple-300 text-gray-900 focus:ring-purple-500 focus:border-purple-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
                                        placeholder="Jabatan User" value="{{ $user->jabatan }}">
                                </div>
                                @if ($errors->has('jabatan'))
                                    <div class="block w-full text-sm text-red-800 dark:bg-gray-800 dark:text-red-400" role="alert">
                                        {{ $errors->first('jabatan') }}
                                    </div>
                                @endif
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800 mt-5">Update Akun</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Card Section -->
    </div>

    <script>
        function previewImage(input) {
        var preview = document.getElementById('imagePreview');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "{{ isset($user) ? asset($user->profile_image) : 'https://www.its.ac.id/international/wp-content/uploads/sites/66/2020/02/blank-profile-picture-973460_1280-1.jpg' }}";
        }
    }
    </script>

</body>

</html>
