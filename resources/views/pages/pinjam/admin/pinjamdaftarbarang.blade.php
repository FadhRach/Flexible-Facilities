<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-yellow-50">

        <!-- Sidebar Start -->
        <x-sidebar-pinjam />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">
            <!-- Table Start -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-6 mt-3">
                    <span href="#" class="flex items-center ml-1 p-1">
                        <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                        <h2 class="font-semibold text-purple-950 text-2xl">Daftar Barang</h2>
                    </span>
                    <div class="pb-4 dark:bg-gray-900 ml-2">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for Ruangan">
                        </div>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th sxcope="col" class="px-6 py-3">
                                    Nomor
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Barang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Merk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status Barang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pengaturan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $number = 1;    
                            ?>
                            @foreach ($barang as $b)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">                                  
                                    {{ $number }}
                                    <?php $number++; ?>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b->nama_barang }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $b->merk_type }}
                                </td>   
                                <td class="px-6 py-4">
                                    {{ $b->relkibf->nama_ruangan }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($b->status_barang === 'baik')
                                        <span class="text-green-500">{{ $b->status_barang }}</span>
                                    @elseif ($b->status_barang === 'rusak')
                                        <span class="text-red-500">{{ $b->status_barang }}</span>
                                    @else
                                        {{ $b->status_barang }}
                                    @endif
                                </td>
                                
                                <td class="px-6 py-4">
                                    <a href="/pinjamdaftarsarprasbarang/edit/{{ $b->id_barang }}"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg inline-block text-center w-24">Ubah Status</a>
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
