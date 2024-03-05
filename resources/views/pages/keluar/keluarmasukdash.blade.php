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
                        <h2 class="font-semibold text-purple-950 text-sm lg:text-2xl">Barang Terbaru - KIB A</h2>
                    </span>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-50 uppercase bg-[#5B536F] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">
                                    Nama Tanah
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Alamat
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Luas
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Tahun
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Kota
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kib_a as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->nama }}
                                </th>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->alamat }}
                                </th>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->luas }}
                                </th>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->tahun }}
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
            {{ $kib_a->links() }}
            <!-- Footer Start -->
            <x-footer />
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ Session::get('success') }}'
                });
            </script>
        @endif

        @if (Session::has('successdl'))
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Berhasil Dihapus',
                    text: '{{ Session::get('successdl') }}'
                });
            </script>
        @endif

    </body>
</html>
