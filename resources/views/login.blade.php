<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body>
        <section class="bg-purple-100 min-h-screen flex items-center justify-center">
            <!-- login container -->
            <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
              <!-- form -->
              <div class="md:w-1/2 px-8 md:px-16">
                <h2 class="font-bold text-purple-800 text-5xl">FlexF !</h2>
                <p class="text-xs mt-4 text-purple-400">Aplikasi Sarana Prasarana SMKN 1 Cimahi</p>

                <form action="" class="flex flex-col gap-4" method="POST">
                    @csrf
                  <input class="p-2 mt-8 rounded-xl border border-gray-100" type="email" name="email" placeholder="Email" value="{{ old('email')}}">
                  @error('email')
                    <p class="text-xs ml-2 text-purple-400">{{ $message }}</p>
                  @enderror
                  <div class="relative">
                    <input class="p-2 rounded-xl border w-full border-gray-100" type="password" name="password" placeholder="Password">
                    @error('password')
                    <p class="text-xs mt-2 ml-2 text-purple-400">{{ $message }}</p>
                  @enderror
                  </div>
                    <button name="submit" type="submit" class="bg-purple-800 rounded-xl text-white py-2 duration-500" value="Login">Login</button>
                </form>

                <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
                  <hr class="border-gray-400">
                  <p class="text-center text-sm">OR</p>
                  <hr class="border-gray-400">
                </div>

                <a href="https://drive.google.com/drive/my-drive">
                    <button class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm text-gray-500">
                        <img class="mr-3" viewBox="0 0 48 48" width="25px" src="{{ asset('img/asset-gdrive.svg') }}">
                        Download Mobile Apps
                      </button>
                </a>

              </div>

              <!-- image -->
              <div class="md:block hidden w-1/2">
                <img class="rounded-2xl" src="{{ asset('img/asset-loginbg.png') }}">
              </div>
            </div>
          </section>

          @if($massage = Session::get('failed'))
          <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal Login !',
                text: 'Email atau Password Salah'
            })
          </script>
          @endif
    </body>

</html>
