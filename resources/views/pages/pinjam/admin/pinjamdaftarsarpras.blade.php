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
            <div class="gap-4 mb-6">

                <!-- First Table Start -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center ml-1 p-1">
                        <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                        <h2 class="font-semibold text-purple-950 text-2xl">Daftar Ruangan</h2>
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
                                <th scope="col" class="px-6 py-3">
                                    Foto Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    kode Ruangan
                                </th>                               
                                <th scope="col" class="px-6 py-3">
                                    Status Pinjam
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pengaturan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ruangan as $r)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">
                                    <img style="object-fit: cover; width: 100px; height: 100px;"
                                    src="{{ url('/image/' . $r->foto_ruang) }}">
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $r->nama_ruangan }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $r->kode_ruangan }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($r->statpinjam == 'bisa dipinjam')
                                        <span class="text-green-500">{{ $r->statpinjam }}</span>
                                    @elseif ($r->statpinjam == 'tidak bisa dipinjam')
                                        <span class="text-red-500">{{ $r->statpinjam }}</span>
                                    @elseif ($r->statpinjam == 'pemeliharaan')
                                        <span class="text-yellow-500">{{ $r->statpinjam }}</span>
                                    @else
                                        {{ $r->statpinjam }}
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <a href="/pinjamdaftarsarpras/edit/{{ $r->id_ruangan }}"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg inline-block text-center w-24">Ubah Status</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>     
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
