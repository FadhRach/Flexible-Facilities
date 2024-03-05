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
                <img src="{{ asset('img/asset-decorfive.png') }}" alt="" class="h-24">
                <h2 class="font-semibold text-green-800 text-2xl">Data KIB C.</h2>
            </span>

            <!-- Table Kib Start -->
            <div class="grid grid-cols-1 gap-4 mb-8">

                <!-- Table Kib 1 Start -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center p-3 ml-3">
                        <h2 class="font-semibold text-green-800 text-2xl">Data Bangunan.</h2>
                    </span>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-50 uppercase bg-custom-inv dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="pl-4 px-2 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-1 py-3">
                                    KD - B
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Alamat
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Luas Lantai
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Bulan
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Tahun
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Asal
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Umur
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Kota
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    OPD
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Sub OPD
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Keterangan
                                </th>
                                <th scope="col" class="pr-4 px-2 py-3">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kibc as $c)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="pl-4 px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $c->nama }}
                                </th>
                                <td class="px-2 py-4">
                                    {{ $c->kode_bangunan }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->alamat }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->luas_lantai }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->bulan }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->tahun }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->asal }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->umur }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->kota }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->opd }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->sub_opd }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->keterangan }}
                                </td>
                                <td class="px-2 py-4 pr-4">
                                    <a href="/kibcinv/edit/{{ $c->id_kib_c }}">
                                        <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-custom-inv rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            Edit
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Table Kib 1 End -->

            </div>
            <!-- Table Kib End -->
            {{ $kibc->links() }}
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

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ Session::get('success') }}'
                });
            </script>
        @endif

    </body>
</html>
