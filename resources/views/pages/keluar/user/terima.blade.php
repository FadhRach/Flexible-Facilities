<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-purple-50">

        <!-- Sidebar Start -->
        <x-user-keluar />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <x-user-navbar-klr />

            <!-- Table Start -->
            <div class="grid grid-cols-1 gap-4 mb-10 mt-10">


                <!-- First Table Start A -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center ml-1 p-1">
                        <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                        <h2 class="font-semibold text-purple-950 text-sm lg:text-2xl">Daftar Permohonan</h2>
                    </span>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-50 uppercase bg-[#5B536F] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Barang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Alasan Permohonan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Yang Mengajukan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jabatan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Permohonan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengajuan as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->relpeng ? $item->relpeng->nama_barang : 'Nama Barang Tidak Tersedia' }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->alasan }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->relpengus->name }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->relpengus->jabatan }}
                                </th>
                                <th scope="row" class="px-6 py-4 whitespace-nowrap">
                                    @if ($item->disetujui == 'disetujui')
                                        <span class="text-green-500">{{ $item->disetujui }}</span>
                                    @elseif ($item->disetujui == 'tidak disetujui')
                                        <span class="text-red-500">{{ $item->disetujui }}</span>
                                    @else
                                        <span class="text-black">{{ $item->disetujui }}</span>
                                    @endif
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- First Table End A -->

            </div>
            <!-- Table End -->
            {{ $pengajuan->links() }}
            <!-- Footer Start -->
            <x-footer />
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
    </body>
</html>
