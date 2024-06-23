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
    <x-navbar></x-navbar>

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

    <x-footer></x-footer>
  </body>
</html>