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

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-7 text-xl font-medium text-gray-900 dark:text-white">Edit Status Ruangan</h3>
                <form method="POST" action="/pinjamdaftarsarpras/update/{{ $ruangan->id_ruangan }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                        <img src="{{ url('/image/' . $ruangan->foto_ruang ) }}" alt="image Ruangan"
                            class="h-36 rounded-full">
                        <label for="nama_ruangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Ruangan</label>
                    </div>
                    <div class="mb-6">
                        <label for="nama_ruangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ruangan</label>
                        <input type="nama_ruangan" id="nama_ruangan" name="nama_ruangan"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required value="{{ $ruangan->nama_ruangan }}" disabled>
                    </div>
                    <div class="mb-6">
                        <label for="kode_ruangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Ruangan</label>
                        <input type="kode_ruangan" id="kode_ruangan" name="kode_ruangan"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required value="{{ $ruangan->kode_ruangan }}" disabled>
                    </div>
                    <div class="mb-6">
                        <label for="repeat-password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Pinjam Ruangan</label>
                            <select id="countries" name="statpinjam"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                            <option selected class="text-gray-500">Pilih Status Pinjam</option>
                            <option value="tidak bisa dipinjam">tidak bisa dipinjam</option>
                            <option value="bisa dipinjam">bisa dipinjam</option>
                            <option value="pemeliharaan">pemeliharaan</option>
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
