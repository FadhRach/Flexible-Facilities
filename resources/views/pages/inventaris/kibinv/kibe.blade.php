<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-green-50">

        <!-- Sidebar Start -->
        <x-sidebar-inv />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <x-navbar-inv />

            <span href="#" class="flex items-center p-1 justify-center mr-6">
                <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-24">
                <h2 class="font-semibold text-green-800 text-2xl">Data KIB E.</h2>
            </span>

            <!-- Table Kib Start -->
            <div class="grid grid-cols-1 gap-4 mb-8">

                <!-- Table Kib 1 Start -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center p-3 ml-3">
                        <h2 class="font-semibold text-green-800 text-2xl">Data Barang - E.</h2>
                    </span>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-1 py-3">
                                    KD - B
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Register
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    ID Ruangan
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Merk / Type
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Tahun
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Nomor Unik
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Harga
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Nilai
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Akumulasi
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Keterangan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kibe as $c)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $c->nama_barang }}
                                </th>
                                <td class="px-2 py-4">
                                    {{ $c->kode_barang }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->register }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->id_ruangan }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->merk_type }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->tahun }}
                                </td>
                                <td class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $c->nomor_unik }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->harga }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->nilai }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->akumulasi }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->status_barang }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->keterangan }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Table Kib 1 End -->

            </div>
            <!-- Table Kib End -->
            {{ $kibe->links() }}
            <!-- Footer Start -->
            <x-footer-inv />
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        @if (Session::has('successres'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: '{{ Session::get('successres') }}'
                });
            </script>
        @endif

        @if (Session::has('successdel'))
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'berhasil',
                    text: '{{ Session::get('successdel') }}'
                });
            </script>
        @endif

    </body>
</html>
