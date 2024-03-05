<!doctype html>
<html>

<head>
    <x-app />
</head>

<body class="bg-yellow-50">

    <!-- Sidebar Start -->
    <x-user-sidebar />
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="p-4 sm:ml-64">

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 mb-6">
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-7 text-xl font-medium text-gray-900 dark:text-white">Pinjam Barang</h3>
                <form method="POST" action="/pinjambarang/store">
                    {{ csrf_field() }}
                    <div class="mb-6">
                        <label for="id_user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Peminjam</label>
                        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        type="hidden" id="id_user" name="id_user" required value="{{ Auth::user()->id_user }}">
                        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        type="text" required value="{{ Auth::user()->name }}" disabled>
                    </div>        
                    <div class="mb-6">
                        <label for="id_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
                        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        type="hidden" name="id_barang" id="id_barang" value="{{ $barang->id_barang }}">
                        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        type="text" required value="{{ $barang->nama_barang }}" disabled>
                    </div>
                    <div class="mb-6">
                        <label for="ruangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Barang</label>
                        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        type="text" required value="{{ $barang->ruangan->nama_ruangan }}" disabled>
                    </div> 
                    <div class="mb-6">
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan Meminjam</label>
                        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        type="text" id="deskripsi" name="deskripsi" placeholder="Untuk Apa?" required value="{{ old('deskripsi') }}">
                    </div>
                    <div class="mb-6">
                        <label for="time_from" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pinjam dari</label>
                        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        type="datetime-local" id="time_from" name="time_from" required value="{{ old('time_from') }}">
                    </div>
                    <div class="mb-6">
                        <label for="time_to" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pinjam Sampai</label>
                        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        type="datetime-local" id="time_to" name="time_to" required value="{{ old('time_to') }}">
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" style="background-color: #876256"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Pinjam
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <x-footer-pinjam />
    </div>
    <!-- Content End -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
</body>

</html>
