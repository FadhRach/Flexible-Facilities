<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-50 uppercase bg-[#193E3E] dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Nama Barang
            </th>
            <th scope="col" class="px-6 py-3">
                Merk / Type
            </th>
            <th scope="col" class="px-6 py-3">
                Status Barang
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $item)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $item->nama_barang }}
            </th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $item->merk_type }}
            </th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $item->status_barang }}
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
