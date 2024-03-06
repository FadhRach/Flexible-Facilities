!doctype html>
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

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-6 mt-3">
            <span href="#" class="flex items-center ml-1 p-1">
                <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                <h2 class="font-semibold text-purple-950 text-2xl">Response Barang</h2>
            </span>

            <table class="w-full text-sm text-left mt-5 text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-2 py-3">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Nama Peminjam
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Nama Barang
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Lokasi Barang
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Alasan Meminjam
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Waktu Pinjam Awal
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Waktu Pinjam Akhir
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
                    @foreach ($pinjam_barang as $pb)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-2 py-4">
                                {{ $number }}
                                <?php $number++; ?>
                            </td>
                            <th scope="row"
                                class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $pb->user->name }}
                            </th>
                            <th scope="row"
                                class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $pb->barang->nama_barang }}
                            </th>
                            <td scope="row"
                                class="px-4 py-4">
                                {{ $pb->barang->relkibf->nama_ruangan }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $pb->deskripsi }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $pb->time_from }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $pb->time_to }}
                            </td>
                            <td class="px-6 py-3">
                                <a href="/pinjamresponse/prasarana/edit/{{ $pb->id_pinjambarang }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg inline-block text-center w-24">
                                    Edit
                                </a>
                                <a href="/pinjamresponse/prasarana/delete/{{ $pb->id_pinjambarang }}"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg inline-block text-center w-24">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Footer Start -->
        <x-footer-pinjam />
        <!-- Footer End -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
    </div>
    <!-- Content End -->
</body>

</html>
