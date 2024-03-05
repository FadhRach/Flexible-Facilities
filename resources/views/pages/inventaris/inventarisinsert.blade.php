<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-green-50">

        <!-- Sidebar Start -->
        <x-sidebar-inv />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">
            <div class="grid grid-cols-1 gap-4 mb-10 mt-10">

                <!-- First Table Start A -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center ml-1 p-1">
                        <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                        <h2 class="font-semibold text-green-950 text-sm lg:text-2xl">Data Barang Verifikasi</h2>
                    </span>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-50 uppercase bg-custom-inv dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Barang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kode Barang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status Verifikasi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Verifikasi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kib_b as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->nama_barang }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->nomor_unik }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->disetujui }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href="/insertdata/form/{{ $item->id_barang }}">
                                        <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            Verifikasi
                                            <svg class="w-3 h-3 text-white ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                                <path stroke="currentColor"stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </button>
                                    </a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="p-4">
                        {{ $kib_b->links() }}
                    </div>

                </div>
                <!-- First Table End A -->

            </div>

            <x-footer-inv />
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
