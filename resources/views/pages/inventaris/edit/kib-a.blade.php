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

            <!-- Table Start -->
            <div class="flex items-center justify-center mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <form class="p-3" action="/kibainv/edit/action/{{ $kiba->id_kib_a }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="space-y-12 p-5">
                      <div class="border-b border-gray-900/10 pb-12">

                        <span href="#" class="flex items-center mt-10 justify-center">
                            <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-9">
                            <h2 class="font-semibold text-green-950 text-xl ml-2">Form Edit Data KIB - A.</h2>
                        </span>

                        <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-6">

                            <span class="flex items-center">
                                <img src="{{ asset('img/asset-decorsix.png') }}" alt="" class="h-10">
                                <h2 class="font-medium text-green-950 text-md mt-1 ml-2">Form Tanah.</h2>
                            </span>


                          <!-- Form ini -->

                          <div class="sm:col-span-full">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Tanah</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="nama" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kiba->nama }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kode Tanah</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="number" name="kode_tnh" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  value="{{ $kiba->kode_tnh }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Luas Tanah</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="Number" name="luas" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  value="{{ $kiba->luas }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Alamat Tanah</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="alamat" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kiba->alamat }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tahun Tanah</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="Number" name="tahun" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  value="{{ $kiba->tahun }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Keterangan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="Text" name="tahun" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  value="{{ $kiba->keterangan }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-full">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nilai</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="Number" name="nilai" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  value="{{ $kiba->nilai }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">O P D</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="opd" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  value="{{ $kiba->opd }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Sub OPD</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="sub_opd" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  value="{{ $kiba->sub_opd }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Asal</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="asal" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kiba->asal }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kota Tanah</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <select name="kota"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                            <option class="text-gray-500">Pilih Kota Tanah</option>
                                            <option value="bandung" @if ($kiba->kota == "bandung") selected @endif>Bandung</option>
                                            <option value="cimahi"  @if ($kiba->kota == "cimahi") selected @endif>Cimahi</option>
                                    </select>
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Persetujuan</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <select name="disetujui"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                            <option class="text-gray-500">Pilih Persetujuan</option>
                                            <option value="disetujui" @if ($kiba->disetujui == "disetujui") selected @endif>Telah Di Setujui</option>
                                            <option value="belum disetujui"  @if ($kiba->disetujui == "belum disetujui") selected @endif>Belum Di Setujui</option>
                                    </select>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6 p-5">
                        <button type="submit" class="rounded-md bg-green-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-800">Save</button>
                    </div>
                  </form>
             </div>
            <!-- Table End -->

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
