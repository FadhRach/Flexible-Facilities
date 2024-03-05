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
    <div class="p-4 sm:ml-64 h-screen flex flex-col justify-center items-center text-center"> <!-- Updated class: added text-center -->
        <div class="max-w-lg p-6 mx-auto bg-white border border-green-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-10">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Peminjaman Sedang Di Ajukan
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Silahkan menunggu konfirmasi dari admin atau petugas sarana & prasarana untuk melihat pengajuan dapat menuju ke history atau melihat kalendar<p class="text-gray-500 mb-5">- admin</p>
            </p>
            <a href="/pinjamuser" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-400 dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                Kembali
            </a>
            <a href="/historypinjam/{{ Auth::user()->id_user }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                History
            </a>
        </div>
    
        <x-footer-pinjam />
    </div>
    
    <!-- Content End -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
</body>


</html>
