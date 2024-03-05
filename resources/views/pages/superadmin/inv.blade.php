<!doctype html>
<html>

<head>
    <x-app />
</head>

<body class="bg-purple-50">
    <div class="h-full bg-purple-50">

        <x-super-navbar />

        <div class="relative overflow-x-auto sm:rounded-lg mb-5 mx-5 p-5 my-5 mt-10">

            <div class="flex justify-center items-center mt-10 mb-6">
                <h1 class="font-semibold text-purple-950 text-2xl">Daftar Inventaris - <span class="italic"> FlexF SMKN 1 Cimahi.</span></h1>
            </div>

            <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 p-4">
                <!-- Tabel untuk KIB A -->
                <div class="rounded-lg overflow-x-scroll shadow-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <span href="#" class="flex items-center p-2 justify-center">
                            <h2 class="font-semibold text-purple-900 text-base">Rekap Data KIB - A.</h2>
                        </span>
                        <thead class="text-xs text-gray-50 uppercase bg-purple-900 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Tanah
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kode Tanah
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Asal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Alamat Tanah
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Keterangan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekapa as $a)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $a->nama ?? ''  }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $a->kode_tnh ?? ''  }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $a->asal ?? ''  }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $a->alamat ?? ''  }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $a->keterangan ?? ''  }}
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
                            <h2 class="font-semibold text-purple-900 text-base">Rekap Data KIB - B.</h2>
                        </span>
                        <thead class="text-xs text-gray-50 uppercase bg-purple-900 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Barang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Merk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kode Barang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kode Unik
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Keterangan
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
                                    {{ $b->relgudins->merk_type ?? '' }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b->relgudins->kode_barang ?? '' }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b->nomor_unik ?? '' }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b->keterangan ?? '' }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-4">
                        {{ $rekapb->links() }}
                    </div>
                </div>

                <div class="mt-10 mb-10 lg:grid md:grid hidden grid-cols-3 col-span-2 items-center text-gray-400">
                    <hr class="border-gray-400">
                    <p class="text-center text-sm">Rekap Data</p>
                    <hr class="border-gray-400">
                </div>

                <!-- Tabel untuk KIB C -->
                <div class="rounded-lg overflow-x-auto shadow-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <span href="#" class="flex items-center p-2 justify-center">
                            <h2 class="font-semibold text-purple-900 text-base">Rekap Data KIB - C.</h2>
                        </span>
                        <thead class="text-xs text-gray-50 uppercase bg-purple-900 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Bangunan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Luas Lantai
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tahun
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Umur
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Alamat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Keterangan
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
                                    {{ $c->luas_lantai ?? '' }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $c->tahun ?? '' }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $c->umur ?? '' }} Tahun
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $c->alamat ?? '' }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $c->keterangan ?? '' }}
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
                            <h2 class="font-semibold text-purple-900 text-base">Rekap Data KIB - D.</h2>
                        </span>
                        <thead class="text-xs text-gray-50 uppercase bg-purple-900 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kode JIJ
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Bulan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tahun
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
                                <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $d->kode_jij ?? '' }}
                                </td>
                                <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $d->bulan ?? '' }}
                                </td>
                                <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $d->tahun ?? '' }}
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

                <div class="mt-10 mb-10 lg:grid md:grid hidden grid-cols-3 col-span-2 items-center text-gray-400">
                    <hr class="border-gray-400">
                    <p class="text-center text-sm">Rekap Data</p>
                    <hr class="border-gray-400">
                </div>

                <!-- Tabel untuk KIB E -->
                <div class="rounded-lg overflow-x-auto shadow-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <span href="#" class="flex items-center p-2 justify-center">
                            <h2 class="font-semibold text-purple-900 text-base">Rekap Data KIB - E.</h2>
                        </span>
                        <thead class="text-xs text-gray-50 uppercase bg-purple-900 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Barang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Merk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kode Barang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kode Unik
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Keterangan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekape as $b)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b->nama_barang ?? '' }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b->relgudins->merk_type ?? '' }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b->relgudins->kode_barang ?? '' }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b->nomor_unik ?? '' }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b->keterangan ?? '' }}
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
                            <h2 class="font-semibold text-purple-900 text-base">Rekap Data KIB - F.</h2>
                        </span>
                        <thead class="text-xs text-gray-50 uppercase bg-purple-900 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kode Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status Pinjam
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
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $f->statpinjam ?? '' }}
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

    </div>

</body>

</html>
