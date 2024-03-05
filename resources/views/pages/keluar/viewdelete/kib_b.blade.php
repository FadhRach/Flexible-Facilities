<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-purple-100">

        <!-- Sidebar Start -->
        <x-sidebar-keluarmasuk />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <x-navbar-delete />

            <span href="#" class="flex items-center p-1 justify-center mr-6 mt-10">
                <img src="{{ asset('img/asset-decorfour.png') }}" alt="" class="h-24">
                <h2 class="font-semibold text-purple-800 text-2xl">Data KIB B.</h2>
            </span>

            <!-- Table Kib Start -->
            <div class="grid grid-cols-1 gap-4 mb-8">

                <!-- Table Kib 1 Start -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center p-3 ml-3">
                        <h2 class="font-semibold text-purple-800 text-2xl">Pemutahiran Data KIB B.</h2>
                    </span>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-50 uppercase bg-[#5B536F] dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-3 py-3 pl-5">
                                    Nama Barang
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Ruangan Barang
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Alasan pemutahiran
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kib_b as $s)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-3 py-4 pl-5 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $s->nama_barang }}
                                </th>
                                <td class="px-3 py-4 font-medium text-gray-900">
                                    {{ $s->relkibf->nama_ruangan }}
                                </td>
                                <td class="px-3 py-4 font-medium text-gray-900">
                                    @if ($s->alasan_pemutahiran)
                                        {{ $s->alasan_pemutahiran }}
                                    @else
                                        Data tidak pernah dimutahirkan.
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <a href="/pemutahirandata/kibb/{{ $s->id_barang }}">
                                        <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#5B536F] rounded-lg hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                            Pemutahiran
                                            <svg class="w-3 h-3 text-white ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                                <path stroke="currentColor"stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Table Kib 1 End -->

            </div>
            <!-- Table Kib End -->
            {{ $kib_b->links() }}
            <!-- Footer Start -->
            <x-footer />
            <!-- Footer End -->

        </div>
        <!-- Content End -->

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Berhasil Dihapus',
                    text: '{{ Session::get('success') }}'
                });
            </script>
        @endif

    </body>
</html>
