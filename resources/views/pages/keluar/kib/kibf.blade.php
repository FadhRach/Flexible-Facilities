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
                <form class="p-3" action="/kib-f/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-12 p-5">
                      <div class="border-b border-gray-900/10 pb-12">

                        <span href="#" class="flex items-center">
                            <img src="{{ asset('img/asset-decorsix.png') }}" alt="" class="h-12">
                            <h2 class="font-semibold text-purple-950 text-2xl ml-2">Form Barang Masuk.</h2>
                        </span>

                        <!-- Modals Button Start -->
                        <button type="button" data-modal-target="crypto-modal" data-modal-toggle="crypto-modal" class="ml-1 mt-3 text-gray-50 bg-[#4D465F] hover:bg-[#363045] border border-purple-300 focus:ring-2 focus:outline-none focus:ring-purple-800 font-medium rounded-lg text-sm px-2 py-2 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
                            <img src="{{ asset('img/logo-inventaris.gif') }}" alt="" class="h-5 mr-2">
                            KIB A-F
                        </button>
                        <!-- Modals Button Start -->

                        <span href="#" class="flex items-center mt-10 justify-center">
                            <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-9">
                            <h2 class="font-semibold text-purple-950 text-xl ml-2">Form Data KIB F.</h2>
                        </span>

                        <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-6">

                            <span class="flex items-center">
                                <img src="{{ asset('img/asset-decorfive.png') }}" alt="" class="h-10">
                                <h2 class="font-medium text-purple-950 text-md mt-1 ml-2">Form Ruangan.</h2>
                            </span>


                          <!-- Form ini -->

                          <div class="sm:col-span-full">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Ruangan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                <input type="text" name="nama_ruangan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Nama Ruangan">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kode Ruangan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                <input type="text" name="kode_ruangan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Kode Ruangan">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Status Ruangan</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <select name="statpinjam"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                            <option selected class="text-gray-500">Pilih status Ruangan</option>
                                            <option value="tidak bisa dipinjam">tidak bisa dipinjam</option>
                                            <option value="pemeliharaan">pemeliharaan</option>
                                            <option value="bisa dipinjam">bisa dipinjam</option>
                                    </select>
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Foto Ruangan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                <input type="file" name="foto_ruang" id="foto_ruang" class="block flex-1 border-0 bg-transparent pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 rounded-lg">
                              </div>
                            </div>
                          </div>

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

        <!-- Modals Start -->
        <div id="crypto-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="crypto-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <!-- Modal header -->
                    <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-base font-semibold text-purple-950 lg:text-xl dark:text-white">
                            KIB A - F.
                        </h3>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6">
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Pilih KIB yang akan dituju.</p>
                        <ul class="my-4 space-y-3">
                            <li>
                                <a href="/kib-a" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <svg aria-hidden="true" class="h-5" viewBox="0 0 292 292" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M145.7 291.66C226.146 291.66 291.36 226.446 291.36 146C291.36 65.5541 226.146 0.339844 145.7 0.339844C65.2542 0.339844 0.0400391 65.5541 0.0400391 146C0.0400391 226.446 65.2542 291.66 145.7 291.66Z" fill="#3259A5"/><path d="M195.94 155.5C191.49 179.08 170.8 196.91 145.93 196.91C117.81 196.91 95.0204 174.12 95.0204 146C95.0204 117.88 117.81 95.0897 145.93 95.0897C170.8 95.0897 191.49 112.93 195.94 136.5H247.31C242.52 84.7197 198.96 44.1797 145.93 44.1797C89.6904 44.1797 44.1104 89.7697 44.1104 146C44.1104 202.24 89.7004 247.82 145.93 247.82C198.96 247.82 242.52 207.28 247.31 155.5H195.94Z" fill="white"/></svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">KIB A</span>
                                </a>
                            </li>
                            <li>
                                <a href="/kib-b" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <svg aria-hidden="true" class="h-5" viewBox="0 0 292 292" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M145.7 291.66C226.146 291.66 291.36 226.446 291.36 146C291.36 65.5541 226.146 0.339844 145.7 0.339844C65.2542 0.339844 0.0400391 65.5541 0.0400391 146C0.0400391 226.446 65.2542 291.66 145.7 291.66Z" fill="#3259A5"/><path d="M195.94 155.5C191.49 179.08 170.8 196.91 145.93 196.91C117.81 196.91 95.0204 174.12 95.0204 146C95.0204 117.88 117.81 95.0897 145.93 95.0897C170.8 95.0897 191.49 112.93 195.94 136.5H247.31C242.52 84.7197 198.96 44.1797 145.93 44.1797C89.6904 44.1797 44.1104 89.7697 44.1104 146C44.1104 202.24 89.7004 247.82 145.93 247.82C198.96 247.82 242.52 207.28 247.31 155.5H195.94Z" fill="white"/></svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">KIB B</span>
                                </a>
                            </li>
                            <li>
                                <a href="/kib-c" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <svg aria-hidden="true" class="h-5" viewBox="0 0 292 292" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M145.7 291.66C226.146 291.66 291.36 226.446 291.36 146C291.36 65.5541 226.146 0.339844 145.7 0.339844C65.2542 0.339844 0.0400391 65.5541 0.0400391 146C0.0400391 226.446 65.2542 291.66 145.7 291.66Z" fill="#3259A5"/><path d="M195.94 155.5C191.49 179.08 170.8 196.91 145.93 196.91C117.81 196.91 95.0204 174.12 95.0204 146C95.0204 117.88 117.81 95.0897 145.93 95.0897C170.8 95.0897 191.49 112.93 195.94 136.5H247.31C242.52 84.7197 198.96 44.1797 145.93 44.1797C89.6904 44.1797 44.1104 89.7697 44.1104 146C44.1104 202.24 89.7004 247.82 145.93 247.82C198.96 247.82 242.52 207.28 247.31 155.5H195.94Z" fill="white"/></svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">KIB C</span>
                                </a>
                            </li>
                            <li>
                                <a href="/kib-d" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <svg aria-hidden="true" class="h-5" viewBox="0 0 292 292" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M145.7 291.66C226.146 291.66 291.36 226.446 291.36 146C291.36 65.5541 226.146 0.339844 145.7 0.339844C65.2542 0.339844 0.0400391 65.5541 0.0400391 146C0.0400391 226.446 65.2542 291.66 145.7 291.66Z" fill="#3259A5"/><path d="M195.94 155.5C191.49 179.08 170.8 196.91 145.93 196.91C117.81 196.91 95.0204 174.12 95.0204 146C95.0204 117.88 117.81 95.0897 145.93 95.0897C170.8 95.0897 191.49 112.93 195.94 136.5H247.31C242.52 84.7197 198.96 44.1797 145.93 44.1797C89.6904 44.1797 44.1104 89.7697 44.1104 146C44.1104 202.24 89.7004 247.82 145.93 247.82C198.96 247.82 242.52 207.28 247.31 155.5H195.94Z" fill="white"/></svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">KIB D</span>
                                </a>
                            </li>
                            <li>
                                <a href="/kib-e" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <svg aria-hidden="true" class="h-5" viewBox="0 0 292 292" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M145.7 291.66C226.146 291.66 291.36 226.446 291.36 146C291.36 65.5541 226.146 0.339844 145.7 0.339844C65.2542 0.339844 0.0400391 65.5541 0.0400391 146C0.0400391 226.446 65.2542 291.66 145.7 291.66Z" fill="#3259A5"/><path d="M195.94 155.5C191.49 179.08 170.8 196.91 145.93 196.91C117.81 196.91 95.0204 174.12 95.0204 146C95.0204 117.88 117.81 95.0897 145.93 95.0897C170.8 95.0897 191.49 112.93 195.94 136.5H247.31C242.52 84.7197 198.96 44.1797 145.93 44.1797C89.6904 44.1797 44.1104 89.7697 44.1104 146C44.1104 202.24 89.7004 247.82 145.93 247.82C198.96 247.82 242.52 207.28 247.31 155.5H195.94Z" fill="white"/></svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">KIB E</span>
                                </a>
                            </li>
                            <li>
                                <a href="/kib-f" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <svg aria-hidden="true" class="h-5" viewBox="0 0 292 292" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M145.7 291.66C226.146 291.66 291.36 226.446 291.36 146C291.36 65.5541 226.146 0.339844 145.7 0.339844C65.2542 0.339844 0.0400391 65.5541 0.0400391 146C0.0400391 226.446 65.2542 291.66 145.7 291.66Z" fill="#3259A5"/><path d="M195.94 155.5C191.49 179.08 170.8 196.91 145.93 196.91C117.81 196.91 95.0204 174.12 95.0204 146C95.0204 117.88 117.81 95.0897 145.93 95.0897C170.8 95.0897 191.49 112.93 195.94 136.5H247.31C242.52 84.7197 198.96 44.1797 145.93 44.1797C89.6904 44.1797 44.1104 89.7697 44.1104 146C44.1104 202.24 89.7004 247.82 145.93 247.82C198.96 247.82 242.52 207.28 247.31 155.5H195.94Z" fill="white"/></svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">KIB F</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modals End -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: '{{ Session::get('success') }}'
                });
            </script>
        @endif

    </body>
</html>
