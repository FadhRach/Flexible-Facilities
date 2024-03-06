<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-yellow-50">

        <!-- Sidebar Start -->
        <x-user-sidebar />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <span href="#" class="flex items-center ml-1 p-1">
                <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                <h2 class="font-semibold text-yellow-800 text-2xl">Pinjam Barang</h2>
            </span>

            <!-- Search -->
            <div class="p-4 bg-yellow-50 dark:bg-gray-900">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-[#9C7260] dark:text-[#9C7260]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-[#9C7260] rounded-lg w-80 bg-white focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500" placeholder="Cari Sarpras">
                </div>
            </div>
            <!-- Search -->

            <!-- Table Start -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-5">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-[#f1f1f1] uppercase bg-[#9C7260] dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                Nama Barang
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Register Barang
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Asal Ruangan
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $b)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $b->nama_barang }}
                            </th>
                            <td class="px-4 py-4">
                                {{ $b->nomor_unik }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $b->relkibf->nama_ruangan }}
                            </td>
                            <td class="px-4 py-4">
                                <a href="/pinjamuserbarangform/{{ $b->id_barang }}" class="font-bold text-yellow-600 dark:text-yellow-500 hover:underline">Pinjam</a>
                            </td>
                        </tr>                   
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Table End -->

            <!-- Footer Start -->
            <x-footer-pinjam />
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
    </body>
</html>
