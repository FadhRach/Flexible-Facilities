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

            <span href="#" class="flex items-center p-1 justify-center mr-6 mt-5">
                <img src="{{ asset('img/asset-decorfour.png') }}" alt="" class="h-24">
                <h2 class="font-semibold text-green-800 text-2xl">Rekap Data.</h2>
            </span>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-5">

                <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 p-4">
                    <!-- Tabel untuk KIB A -->
                    <div class="rounded-lg overflow-x-scroll shadow-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <span href="#" class="flex items-center p-2 justify-center">
                                <h2 class="font-semibold text-green-700 text-base">Rekap Data KIB - A.</h2>
                            </span>
                            <thead class="text-xs text-gray-50 uppercase bg-custom-inv dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Tanah
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Alamat Tanah
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rekapa as $a)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $a->nama ?? '' }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $a->alamat ?? '' }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-4">
                            {{ $rekapa->links() }}
                        </div>
                    </div>

                    <!-- Tabel untuk KIB B -->
                    <div class="rounded-lg overflow-x-auto shadow-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <span href="#" class="flex items-center p-2 justify-center">
                                <h2 class="font-semibold text-green-700 text-base">Rekap Data KIB - B.</h2>
                            </span>
                            <thead class="text-xs text-gray-50 uppercase bg-custom-inv dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Barang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kode Unik
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rekapb as $b)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $b->nama_barang ?? '' }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $b->nomor_unik ?? '' }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-4">
                            {{ $rekapb->links() }}
                        </div>
                    </div>

                    <!-- Tabel untuk KIB C -->
                    <div class="rounded-lg overflow-x-auto shadow-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <span href="#" class="flex items-center p-2 justify-center">
                                <h2 class="font-semibold text-green-700 text-base">Rekap Data KIB - C.</h2>
                            </span>
                            <thead class="text-xs text-gray-50 uppercase bg-custom-inv dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Bangunan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Alamat
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rekapc as $c)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $c->nama ?? '' }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $c->alamat ?? '' }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-4">
                            {{ $rekapc->links() }}
                        </div>
                    </div>

                    <!-- Tabel untuk KIB D -->
                    <div class="rounded-lg overflow-x-auto shadow-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <span href="#" class="flex items-center p-2 justify-center">
                                <h2 class="font-semibold text-green-700 text-base">Rekap Data KIB - D.</h2>
                            </span>
                            <thead class="text-xs text-gray-50 uppercase bg-custom-inv dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama JIJ
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Alamat
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rekapd as $d)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $d->nama ?? '' }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $d->alamat ?? '' }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-4">
                            {{ $rekapd->links() }}
                        </div>
                    </div>

                    <!-- Tabel untuk KIB E -->
                    <div class="rounded-lg overflow-x-auto shadow-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <span href="#" class="flex items-center p-2 justify-center">
                                <h2 class="font-semibold text-green-700 text-base">Rekap Data KIB - E.</h2>
                            </span>
                            <thead class="text-xs text-gray-50 uppercase bg-custom-inv dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Barang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kode Unik
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rekape as $e)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $e->nama_barang ?? '' }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $e->nomor_unik ?? '' }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-4">
                            {{ $rekape->links() }}
                        </div>
                    </div>

                    <!-- Tabel untuk KIB F -->
                    <div class="rounded-lg overflow-x-auto shadow-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <span href="#" class="flex items-center p-2 justify-center">
                                <h2 class="font-semibold text-green-700 text-base">Rekap Data KIB - F.</h2>
                            </span>
                            <thead class="text-xs text-gray-50 uppercase bg-custom-inv dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Ruangan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kode Ruangan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rekapf as $f)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $f->nama_ruangan ?? '' }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $f->kode_ruangan ?? '' }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-4">
                            {{ $rekapf->links() }}
                        </div>
                    </div>
                </div>


            </div>

            <x-footer-inv />

        </div>
        <!-- Content End -->
    </body>
</html>
