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

            <!-- Table Start -->
            <div class="flex items-center justify-center mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <form class="p-3" action="/pemutahiran/action/kibf/{{ $kibf->id_ruangan }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="space-y-12 p-5">
                      <div class="border-b border-gray-900/10 pb-12">

                        <span href="#" class="flex items-center">
                            <img src="{{ asset('img/asset-decorsix.png') }}" alt="" class="h-12">
                            <h2 class="font-semibold text-purple-950 text-2xl ml-2">Form Pemutahiran Data.</h2>
                        </span>

                        <span href="#" class="flex items-center mt-10 justify-center">
                            <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-9">
                            <h2 class="font-semibold text-purple-950 text-xl ml-2">Form Pemutahiran KIB D.</h2>
                        </span>

                        <!-- Ini Form -->

                        <div class="sm:col-span-full py-8">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Foto Ruangan</label>
                            <div class="mt-2">
                                <img style="object-fit: cover; width: 300px; height: 300px;"
                                    src="{{ url('/image/' . $kibf->foto_ruang) }}">
                            </div>
                        </div>

                        <div class="sm:col-span-full py-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Ruangan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                <input type="text" name="nama_ruangan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Nama Tanah . . ." value="{{ $kibf->nama_ruangan }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3 py-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kode Ruangan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                <input type="text" name="kode_ruangan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Kode Tanah . . ." value="{{ $kibf->kode_ruangan }}">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3 py-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Status Ruangan</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <select name="statpinjam"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                            <option selected class="text-gray-500">Pilih status Ruangan</option>
                                            <option value="tidak bisa dipinjam" @if ($kibf->statpinjam == "tidak bisa dipinjam") selected @endif>tidak bisa dipinjam</option>
                                            <option value="pemeliharaan" @if ($kibf->statpinjam == "pemeliharan") selected @endif>pemeliharaan</option>
                                            <option value="bisa dipinjam" @if ($kibf->statpinjam == "bisa dipinjam") selected @endif>bisa dipinjam</option>
                                    </select>
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3 py-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Alasan Pemutahiran</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                <input type="text" name="alasan_pemutahiran" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Kode Tanah . . ." value="{{ $kibf->alasan_pemutahiran }}">
                              </div>
                            </div>
                          </div>

                          <!-- Ini Form -->

                        </div>
                      </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6 p-5">
                        <button type="submit" class="rounded-md bg-purple-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-800">Save</button>
                    </div>
                  </form>
             </div>
            <!-- Table End -->

        </div>
        <!-- Content End -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

    </body>
</html>
