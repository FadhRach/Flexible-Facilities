<!doctype html>
<html>

<head>
    <x-app />
</head>

<body>
    <!-- Sidebar Start -->
    <x-user-sidebar />
    <!-- Sidebar End -->

    <!-- Main Start -->
    <div class="p-4 sm:ml-64">

        <h1 class="ml-4 font-semibold text-yellow-800 text-2xl">BOOKING</h1>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h1 class="text-center font-medium text-black text-2xl">HISTORY PINJAM RUANGAN</h1>
            <table class="w-full mx-auto text-sm text-left text-gray-500 dark:text-gray-400 mt-5 mb-10">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Pinjam Ruangan/Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alasan Pinjam
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pinjam Dari
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pinjam Sampai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pinjam_tempat as $pt)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $pt->ruangan->nama_ruangan }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $pt->deskripsi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pt->time_from }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pt->time_to }}
                            </td>
                            <td class="px-6 py-4">
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br><br>
            <h1 class="text-center font-medium text-black text-2xl">HISTORY PINJAM BARANG</h1>
            <table class="w-full mx-auto text-sm text-left text-gray-500 dark:text-gray-400 mt-5 mb-10">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Pinjam Ruangan/Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alasan Pinjam
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pinjam Dari
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pinjam Sampai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pinjam_barang as $pb)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $pb->barang->nama_barang }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $pb->deskripsi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pb->time_from }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pb->time_to }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($pb->status_acc === 'diterima')
                                    <span class="text-green-500">{{ $pb->status_acc }}</span>
                                @elseif ($pb->status_acc === 'ditolak')
                                    <span class="text-red-500">{{ $pb->status_acc }}</span>
                                @elseif ($pb->status_acc === 'pengajuan')
                                    <span class="text-yellow-500">{{ $pb->status_acc }}</span>
                                @else
                                    {{ $pb->status_acc }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <!-- Main End -->

</body>

</html>
