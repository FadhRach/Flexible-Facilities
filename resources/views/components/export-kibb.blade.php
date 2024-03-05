<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-50 uppercase bg-custom-inv dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-2 py-3 pl-4">
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
            <th scope="col" class="px-2 py-3 pr-4">

            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kibb as $c)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-2 py-4 pl-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
            <td class="px-2 py-4 pr-4">
                <a href="/kibbinv/edit/{{ $c->id_barang }}">
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-custom-inv rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Edit
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
