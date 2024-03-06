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
