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

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-6 mt-3">
            <span href="#" class="flex items-center ml-1 p-1">
                <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                <h2 class="font-semibold text-purple-950 text-2xl">Response Ruangan</h2>
            </span>
    
            <table class="w-full text-sm text-left mt-5 text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Nama Peminjam
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Nama Ruangan
                        </th>
                        <th scope="col" class="px-4 py-6">
                            Alasan Meminjam
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Waktu Pinjam Awal
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Waktu Pinjam Akhir
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
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
                    @foreach ($pinjam_tempat as $pt)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-4 py-3">
                                {{ $number }}
                                <?php $number++; ?>
                            </td>
                            <th scope="row"
                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $pt->user->name }}
                            </th>
                            <th scope="row"
                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $pt->ruangan->nama_ruangan }}
                            </th>
                            <td class="px-4 py-6 overflow-auto">
                                {{ $pt->deskripsi }}
                            </td>                            
                            <td class="px-4 py-3">
                                {{ $pt->time_from }}
                            </td>
                            <td class="px-4 py-3">
                                {{ $pt->time_to }}
                            </td>
                            <td class="px-4 py-3">
                                @if ($pt->status_acc === 'diterima')
                                    <span class="text-green-500">{{ $pt->status_acc }}</span>
                                @elseif ($pt->status_acc === 'ditolak')
                                    <span class="text-red-500">{{ $pt->status_acc }}</span>
                                @elseif ($pt->status_acc === 'pengajuan')
                                    <span class="text-yellow-500">{{ $pt->status_acc }}</span>
                                @else
                                    {{ $pt->status_acc }}
                                @endif
                            </td>
                            <td class="px-6 py-3">
                                <a href="/pinjamresponse/sarana/diterima/{{ $pt->id_pinjamtempat }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg inline-block text-center w-24">
                                    Diterima
                                </a>
                                <a href="/pinjamresponse/sarana/ditolak/{{ $pt->id_pinjamtempat }}"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg inline-block text-center w-24">
                                    Ditolak
                                </a>
                            </td>
                            <td class="px-6 py-3">
                                <a href="/pinjamresponse/sarana/edit/{{ $pt->id_pinjamtempat }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg inline-block text-center w-24">
                                    Edit
                                </a>
                                <a href="/pinjamresponse/sarana/delete/{{ $pt->id_pinjamtempat }}"
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
