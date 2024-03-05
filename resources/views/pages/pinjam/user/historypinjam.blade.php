<!doctype html>
<html>

<head>
    <x-app />
</head>

<body>
    <div class="h-full">
        <!-- Navbar  Sectionm-->
        <nav class="bg-white border-yellow-50 dark:bg-gray-900 navigation-bar">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/dashboarduser" class="flex items-center">
                    <img src="{{ asset('img/asset-logopinjam.svg') }}" class="h-8 mr-3" alt="FlexF Logo" />
                    <span
                        class="self-center text-2xl font-bold whitespace-nowrap text-yellow-950 dark:text-white">FlexF.</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-yellow-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <h1 class="font-bold block py-2 pl-3 pr-4 text-white bg-purple-700 rounded md:bg-transparent md:text-purple-700 md:p-0 dark:text-white md:dark:text-purple-500 mr-6">History Peminjaman</h1>
                        </li>
                        <li>
                            <a href="/pinjamuser"
                            class="block py-2 pl-3 pr-4 text-yellow-950 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 md:p-0 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent bg-yellow-300 md:bg-transparent">
                            Kembali
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Section -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h1 class="text-center font-medium text-black">HISTORY PINJAM RUANGAN</h1>
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
            <br>
            <h1 class="text-center font-medium text-black">HISTORY PINJAM BARANG</h1>
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
</body>

</html>
