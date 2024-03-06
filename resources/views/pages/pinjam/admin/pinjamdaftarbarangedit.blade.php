<!doctype html>
<html>

<head>
    <x-app />
</head>

<body class="bg-yellow-50">

    <!-- Sidebar Start -->
    <x-sidebar-pinjam />
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="p-4 sm:ml-64">

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 mb-6">
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-7 text-xl font-medium text-gray-900 dark:text-white">Edit Status Barang</h3>
                <form method="POST" action="/pinjamdaftarsarprasbarang/update/{{ $barang->id_barang }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="mb-6">
                        <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
                        <input type="nama_barang" id="nama_barang" name="nama_barang"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required value="{{ $barang->nama_barang }}" disabled>
                    </div>
                    <div class="mb-6">
                        <label for="merk_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merk</label>
                        <input type="merk_type" id="merk_type" name="merk_type"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required value="{{ $barang->merk_type }}" disabled>
                    </div>
                    <div class="mb-6">
                        <label for="id_ruangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruangan</label>
                        <input type="id_ruangan" id="id_ruangan" name="id_ruangan"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required value="{{ $barang->relkibf->nama_ruangan }}" disabled>
                    </div>
                    <div class="mb-6">
                        <label for="repeat-password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Pinjam barang</label>
                            <select id="countries" name="status_barang"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                            <option selected class="text-gray-500">Pilih Status Pinjam</option>
                            <option value="baik">baik</option>
                            <option value="rusak">rusak</option>
                        </select>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" style="background-color: #876256" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <x-footer-pinjam />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
</body>

</html>
