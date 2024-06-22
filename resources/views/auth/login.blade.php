<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../src/output.css" />
    <title>pendekinlink.id | Login</title>
    <link rel="shortcut icon" href="assets/Logo.jpeg" type="image/x-icon">
    @vite('resources/css/app.css')
  </head>
  <body>
    <!-- navbar -->
    <div class="absolute w-full bg-custom-black text-custom-white">
      <div class="flex">
        <div
          class="flex w-full items-center rounded-lg border-3 border-custom-black bg-custom-grey px-8 py-3"
        >
          <a href="/" class="text-2xl font-bold tracking-tight text-custom-white"
            >pendekinlink<span class="text-3xl text-custom-blue">.</span>id</a
          >
        </div>
        <ul
          class="flex w-fit items-center space-x-8 whitespace-nowrap rounded-lg border-3 border-l-0 border-r-0 border-custom-black bg-custom-grey px-8 py-3 font-medium"
        >
          <li><a href="/" class="hover:text-custom-blue">Pendekin link</a></li>
          <li>
            <a href="" class="hover:text-custom-blue">Pendekin banyak link</a>
          </li>
          @if (Auth::user())
            <li><a href="" class="hover:text-custom-blue">Riwayat</a></li>
          @else
            <li><p class="cursor-default text-custom-lightgrey">Riwayat</p></li>
          @endif
        </ul>
        <button
          class="flex items-center rounded-lg border-3 border-custom-black bg-custom-grey px-8 py-3 font-medium hover:bg-custom-blue"
        >
          Masuk
        </button>
      </div>
    </div>
    <!-- navbar -->

    <div class="flex min-h-screen items-center justify-evenly">
      <div class="mt-14 h-fit flex-row justify-center">
        <div class="text-shadow1 pb-14 text-6xl font-semibold">
          <p class="-mb-1 text-custom-blue">
            Masuk<span class="text-custom-grey"> pake</span>
          </p>
          <p class="-mb-1 text-custom-blue">
            akun<span class="text-custom-grey"> kamu!</span>
          </p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="max-w-[440px] flex-row w-full">
            <input
                type="email"
                class="input1 w-full shadow-custom1 min-[560px]:w-[440px]"
                placeholder="masukin email kamu"
                name="email"
                value="{{ old('email') }}"
            />
            @error('email')
                <p class="font-semibold text-red-600 w-full ml-5">
                    {{ $message }}
                </p>
            @enderror
            <input
                type="password"
                class="input1 mt-7 w-full shadow-custom1 min-[560px]:w-[440px]"
                placeholder="masukin password kamu"
                name="password"
                value="{{ old('password') }}"
            />
            @error('password')
                <p class="font-semibold text-red-600 w-full ml-5">
                    {{ $message }}
                </p>
            @enderror
            </div>
            <div class="flex pt-14">
              <button class="button1 h-20 w-full shadow-custom1" type="submit">Masuk!</button>
            </div>
        </form>

        <div class="w-full pt-14 text-center">
          Belum punya akun?
          <a href="{{ route('register') }}" class="font-bold underline hover:text-custom-lightgrey"
            >Buat disini yuk</a
          >!
        </div>
      </div>
    </div>
  </body>
</html>