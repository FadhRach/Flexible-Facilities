<!doctype html>
<html>

<head>
    <x-app />
</head>

<body class="bg-purple-50">
    <div class="h-full bg-purple-50">

        <x-super-navbar />

        <!-- Card -->
        <div class="mx-5 p-5 my-5 mt-10">

            <div class="flex justify-center items-center mt-10 mb-6">
                <h1 class="font-semibold text-purple-950 text-2xl">Daftar Keluar Masuk - <span class="italic"> FlexF SMKN 1 Cimahi.</span></h1>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-4">

                <div class="bg-gray-50 flex items-center justify-center flex-col p-4 shadow-xl">

                    <div class="flex justify-center items-center mt-10 mb-8">
                        <h1 class="font-semibold text-purple-950 text-lg">Data Dalam Gudang <span class="italic">SMKN 1 Cimahi</span></h1>
                    </div>

                    <form action="/dashboardsa/dataklr" method="GET">
                        <div class="relative flex">
                            <input type="text" name="keyword" value="{{ $keyword }}" placeholder="Cari Nama Barang" class="mr-10 block w-1/3 p-2 text-sm text-gray-900 border border-gray-300 rounded-l-lg bg-gray-50 focus:ring-purple-500 focus:border-purple-500">
                            <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-r-lg text-sm px-4 py-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Search</button>
                        </div>
                    </form>

                    @if(isset($results))
                    <div class="flex justify-center items-center mt-7">
                        <h1 class="font-semibold text-purple-950 text-xs">Terdapat {{ $results->count() }} Buah -<span class="italic"> {{ $keyword ?? 'Data Dalam Gudang' }}</span></h1>
                    </div>

                    <div class="relative overflow-x-auto mt-3 rounded-xl">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-50 uppercase bg-purple-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Barang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Merk
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Penerima
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->nama_barang }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->merk_type }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->nama_penerima }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->kondisi_barang }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>




                <div class="bg-gray-50 flex items-center justify-center flex-col p-4 shadow-xl">

                    <div class="flex justify-center items-center mt-10 mb-8">
                        <h1 class="font-semibold text-purple-950 text-lg">Data Keluar Masuk <span class="italic">SMKN 1 Cimahi</span></h1>
                    </div>


                    <div class="flex justify-center items-center mt-10 mb-2">
                        <h1 class="font-semibold text-purple-950 text-xs"><span class="italic">Data Masuk KIB Barang - A / E</span></h1>
                    </div>
                    <div class="relative overflow-x-auto mt-3 rounded-xl">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-50 uppercase bg-purple-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Barang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ruangan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kode
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keluar as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->nama_barang }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->relkibf->nama_ruangan }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->nomor_unik }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d  F  Y') }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $keluar->links() }}
                    </div>

                    <div class="flex justify-center items-center mt-10 mb-2">
                        <h1 class="font-semibold text-purple-950 text-xs"><span class="italic">Data Keluar KIB</span></h1>
                    </div>
                    <div class="relative overflow-x-auto mt-3 rounded-xl">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-50 uppercase bg-purple-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Barang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Alasan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Penanggung Jawab
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($masuk as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->nama }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->alasan_penghapusan }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->pj_penghapusan }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d  F  Y') }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $keluar->links() }}
                    </div>

                </div>

            </div>

        </div>
        <!-- Card -->

    </div>

</body>

</html>
