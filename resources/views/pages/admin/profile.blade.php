<!doctype html>
<html>

<head>
    <x-app />
</head>

<body>
    <div class="h-full">

        <!-- Navbar  Sectionm-->
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
                class="w-full max-w-sm bg-white border border-purple-800 rounded-lg shadow-xl dark:bg-gray-800 dark:border-gray-700">

                <!-- DropDown -->
                <div class="flex justify-end px-4 pt-4">
                    <button id="dropdownButton" data-dropdown-toggle="dropdown"
                        class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                        type="button">
                        <span class="sr-only">Open dropdown</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 16 3">
                            <path
                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    @foreach ($user as $u)
                    <div id="dropdown"
                        class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2" aria-labelledby="dropdownButton">
                            <li>
                                <a class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" href="/">
                                    Logout
                                <a>
                            </li>
                        </ul>
                    </div>
                </div>
                    <div class="flex flex-col items-center pb-10">
                        <img src="{{ url('/image/' . Auth::user()->profile_image) }}" alt=""
                            class="h-36 rounded-full mb-5">
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $u->name }}</h5>
                        <span class="text-base mb-1 text-gray-700 dark:text-gray-400">{{ $u->jabatan }}</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ $u->email }}</span>
                        <div class="flex mt-4 space-x-3 md:mt-6"><!-- Modal toggle -->
                            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800"
                                type="button">
                                Edit Profile
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-7 text-xl font-medium text-gray-900 dark:text-white">Edit Profile</h3>
                    @foreach ($user as $user)
                    <form class="space-y-6" action="/profile/edit/action/{{ $user->id_user }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <img class="h-44 rounded-full mb-5 border border-purple-900 p-2" id="imagePreview"
                                src="{{ $user && $user->profile_image ? asset($user->profile_image) : 'https://www.its.ac.id/international/wp-content/uploads/sites/66/2020/02/blank-profile-picture-973460_1280-1.jpg' }}"
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
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="name" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="masukkan nama" value=" {{ $user->name }}">
                        </div>
                        @if ($errors->has('name'))
                            <div class="text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="masukkan nama" value=" {{ $user->email }}">
                        </div>
                        @if ($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        <div>
                            <label for="jabatan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="masukkan jabatan" value=" {{ $user->jabatan }}">
                        </div>
                        @if ($errors->has('jabatan'))
                            <div class="text-danger">
                                {{ $errors->first('jabatan') }}
                            </div>
                        @endif
                        <button type="submit"
                            class="w-full text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Edit
                            your account</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
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
                // Pastikan $user diinisialisasi dan profile_image ada
                preview.src = "{{ $user && $user->profile_image ? asset($user->profile_image) : 'https://www.its.ac.id/international/wp-content/uploads/sites/66/2020/02/blank-profile-picture-973460_1280-1.jpg' }}";
            }
        }
    </script>



</body>

</html>
