<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-purple-50">

        <!-- Sidebar Start -->
        <x-user-keluar />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64 flex justify-center items-center mt-5">

                        <!-- Table Start -->
                        <div class="flex items-center justify-center mb-4 rounded bg-gray-50 dark:bg-gray-800">
                            <form class="p-3" action="/permohonan/store" method="POST">
                                @csrf
                                <div class="p-5 flex flex-col justify-center">
                                  <div class="border-b border-gray-900/10 pb-12">

                                    <span class="flex justify-center items-center">
                                        <img src="{{ asset('img/asset-decorsix.png') }}" alt="" class="h-14">
                                        <h2 class="font-semibold text-purple-950 text-xl mt-1 ml-2">Form Permohonan.</h2>
                                    </span>

                                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-6 lg:p-8">
                                      <!-- Form ini -->

                                      <div class="sm:col-span-full p-1">
                                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Yang Mengajukan</label>
                                        <div class="mt-2">
                                          <div class="flex rounded-md shadow-sm p-1 bg-gray-50 ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md">
                                            <select name="id_user"
                                                class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded-lg focus:ring-gray-50 focus:border-gray-50 block w-full p-2 ">
                                                <option selected disable class="text-gray-500">Pilih Nama Yang Mengajukan</option>
                                                @foreach ($relpengus as $r)
                                                <option value="{{ $r->id_user }}">{{ $r->name }} - {{ $r->jabatan }}</option>
                                                @endforeach
                                            </select>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="sm:col-span-full p-1">
                                        <label for="id_ruangan" class="block text-sm font-medium leading-6 text-gray-900">Nama Barang</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm p-1 bg-gray-50 ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md">
                                                <select name="id_barang"
                                                        class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded-lg focus:ring-gray-50 focus:border-gray-50 block w-full p-2 ">
                                                        <option selected disable class="text-gray-500">Pilih Nama Barang</option>
                                                        @foreach ($relpeng as $r)
                                                        <option value="{{ $r->id_barang }}">{{ $r->nama_barang }}&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;{{ $r->merk_type }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-full p-1">
                                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Alasan Permohonan</label>
                                        <div class="mt-2">
                                          <div class="flex rounded-md shadow-sm p-1 ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                            <input type="text" name="alasan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Alasan Permohonan">
                                          </div>
                                        </div>
                                      </div>

                                      <div class="sm:col-span-full p-1">
                                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Respon</label>
                                        <div class="mt-2">
                                          <div class="flex rounded-md shadow-sm p-1 ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                            <input type="text" name="disetujui" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="belum disetujui" readonly>
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                <div class="mt-6 flex items-center justify-end gap-x-6 p-5">
                                    <button type="submit" class="rounded-md bg-purple-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-800">Lakukan Permohonan</button>
                                </div>
                              </form>
                         </div>
                        <!-- Table End -->
        </div>
        <!-- Content End -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ Session::get('success') }}'
                });
            </script>
        @endif

    </body>
</html>
