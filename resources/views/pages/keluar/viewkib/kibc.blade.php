<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-purple-100">

        <!-- Sidebar Start -->
        <x-sidebar-keluarmasuk />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <!-- Table Start -->
            <div class="grid grid-cols-1 gap-4 mb-10 mt-10">

                <x-navbar-viewkib />

                <!-- First Table Start A -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center ml-1 p-1">
                        <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                        <h2 class="font-semibold text-purple-950 text-sm lg:text-2xl">Barang Terbaru - KIB C</h2>
                    </span>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-50 uppercase bg-[#5B536F] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">
                                    Nama Ruangan
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Alamat Ruangan
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Luas Lantai
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Umur Ruangan
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Kota Ruangan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kib_c as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->nama }}
                                </th>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->alamat }}
                                </th>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->luas_lantai }}
                                </th>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->umur }}
                                </th>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->kota }}
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- First Table End A -->

            </div>
            <!-- Table End -->
            {{ $kib_c->links() }}
            <!-- Footer Start -->
            <x-footer />
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: '{{ Session::get('success') }}'
                });
            </script>
        @endif

    </body>
</html>
