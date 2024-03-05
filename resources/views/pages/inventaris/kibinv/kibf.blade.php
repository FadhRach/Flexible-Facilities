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
                <img src="{{ asset('img/asset-decorfour.png') }}" alt="" class="h-24">
                <h2 class="font-semibold text-green-800 text-2xl">Data KIB F.</h2>
            </span>

            <!-- Table Kib Start -->
            <div class="grid grid-cols-1 gap-4 mb-8">

                <!-- Table Kib 1 Start -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center p-3 ml-3">
                        <h2 class="font-semibold text-green-800 text-2xl">Data Ruangan.</h2>
                    </span>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 py-3 pl-5">
                                    Nama
                                </th>
                                <th scope="col" class="px-1 py-3">
                                    KD - R
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    foto
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kibf as $c)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-2 py-4 pl-5 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $c->nama_ruangan }}
                                </th>
                                <td class="px-2 py-4">
                                    {{ $c->kode_ruangan }}
                                </td>
                                <td class="px-2 py-4">
                                    {{ $c->statpinjam }}
                                </td>
                                <td class="px-2 py-4">
                                    <img style="object-fit: cover; width: 100px; height: 100px;"
                                    src="{{ url('/image/' . $c->foto_ruang) }}">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Table Kib 1 End -->

            </div>
            <!-- Table Kib End -->
            {{ $kibf->links() }}
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

    </body>
</html>
