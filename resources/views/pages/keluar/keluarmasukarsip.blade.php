<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-purple-100">

        <!-- Sidebar Start -->
        <x-sidebar-keluarmasuk />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <!-- Table Start -->
            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-4 mb-4 mt-16 lg:mt-36">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center ml-1 p-1">
                        <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                        <h2 class="font-semibold text-purple-800 text-2xl">Permohonan Barang.</h2>
                    </span>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-50 uppercase bg-[#5B536F]">
                            <tr>
                                <th scope="col" class="px-2 pl-4 py-3">
                                    Nama Barang
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Nama Pemohon
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Alasan
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    Waktu
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dash as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-2 pl-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->relpeng ? $item->relpeng->nama_barang : 'Nama Barang Tidak Tersedia' }}
                                    </th>
                                    <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->relpengus->name }}
                                    </th>
                                    <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->alasan }}
                                    </th>
                                    <th scope="row" class="px-4 py-4 font-semibold whitespace-nowrap">
                                        @if ($item->disetujui == 'disetujui')
                                            <span class="text-green-500">{{ $item->disetujui }}</span>
                                        @elseif ($item->disetujui == 'tidak disetujui')
                                            <span class="text-red-500">{{ $item->disetujui }}</span>
                                        @else
                                            <span class="text-black">{{ $item->disetujui }}</span>
                                        @endif
                                        </th>
                                    <td class="px-4 py-4">
                                        {{ \Carbon\Carbon::parse($item->tanggal)->format('d  F  Y') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-4">
                        {{ $dash->links() }}
                    </div>
                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center ml-1 p-1">
                        <img src="{{ asset('img/asset-decorsix.png') }}" alt="" class="h-12">
                        <h2 class="font-semibold text-purple-800 text-2xl">Belum Terverifikasi.</h2>
                    </span>
                    <!-- Alert Pemutahiran -->
                    @foreach ($alert as $a)
                        <div id="alert-border-{{ $loop->index }}" class="flex items-center p-4 mb-4 text-purple-800 border-t-4 border-purple-300 bg-purple-150 mt-3" role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <div class="ml-3 text-sm font-medium">
                                Ada Pengajuan Barang ! dengan nama
                                <span class="font-bold text-purple-700">
                                    {{ $a->relpeng->nama_barang }},
                                </span>
                                yang diajukan oleh
                                <span class="font-bold text-purple-700">
                                    {{ $a->relpengus->name }}
                                </span>
                                <a href="/keluarmasukarsip/form/{{ $a->id_pengajuan }}" class="font-semibold underline hover:no-underline"> Berikan Response Sekarang !</a>
                            </div>
                            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-purple-50 text-purple-500 rounded-lg focus:ring-2 focus:ring-purple-400 p-1.5 hover:bg-purple-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-purple-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-{{ $loop->index }}" aria-label="Close">
                                <span class="sr-only">Dismiss</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                    @endforeach
                    <!-- Alert Pemutahiran -->
                </div>
            </div>
            <!-- Table End -->

            <!-- Footer Start -->
            <x-footer />
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Verifikasi Data Dan Input Data',
                    text: '{{ Session::get('success') }}'
                });
            </script>
        @endif

        @if (Session::has('successfull'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Verifikasi Data',
                    text: '{{ Session::get('successfull') }}'
                });
            </script>
        @endif

    </body>
</html>
