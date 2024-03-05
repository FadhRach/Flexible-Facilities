<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-green-100">

        <!-- Sidebar Start -->
        <x-sidebar-inv />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <!-- Table Start -->
            <div class="flex items-center justify-center mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <form class="p-3" action="/kibcinv/edit/action/{{ $kibc->id_kib_c }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="space-y-12 p-5">
                      <div class="border-b border-gray-900/10 pb-12">


                        <span href="#" class="flex items-center mt-10 justify-center">
                            <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-9">
                            <h2 class="font-semibold text-green-950 text-xl ml-2">Form Edit Data KIB - C.</h2>
                        </span>

                        <!-- Ini Form -->

                        <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-6">

                            <span class="flex items-center">
                                <img src="{{ asset('img/asset-decorfive.png') }}" alt="" class="h-10">
                                <h2 class="font-medium text-green-950 text-md mt-1 ml-2">Form Bangunan.</h2>
                            </span>

                          <div class="sm:col-span-full">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Bangunan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="nama" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->nama }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Alamat Bangunan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="alamat" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->alamat }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kode Bangunan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="number" name="kode_bangunan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->kode_bangunan }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Luas Lantai Bangunan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="Number" name="luas_lantai" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->luas_lantai }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tahun</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="Number" name="tahun" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->tahun }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Bulan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="Number" name="bulan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->bulan }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Umur Bangunan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="Number" name="umur" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->umur }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kota Bangunan</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <select name="kota"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                            <option class="text-gray-500">Pilih Kota Bangunan</option>
                                            <option value="bandung" @if ($kibc->kota == "Bandung") selected @endif>Bandung</option>
                                            <option value="cimahi"  @if ($kibc->kota == "Cimahi") selected @endif>Cimahi</option>
                                    </select>
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Asal</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="asal" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->asal }}">
                              </div>
                            </div>
                          </div>


                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Keterangan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="keterangan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->keterangan }}">
                              </div>
                            </div>
                          </div>
                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">O P D</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="opd" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->opd }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Sub OPD</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                <input type="text" name="sub_opd" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibc->sub_opd }}">
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
                                            <option value="disetujui" @if ($kibc->disetujui == "disetujui") selected @endif>Telah Di Setujui</option>
                                            <option value="belum disetujui"  @if ($kibc->disetujui == "belum disetujui") selected @endif>Belum Di Setujui</option>
                                    </select>
                              </div>
                            </div>
                          </div>
                          <!-- Ini Form -->

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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

    </body>
</html>
