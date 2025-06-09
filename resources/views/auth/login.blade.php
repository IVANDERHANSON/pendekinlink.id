<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pendekinlink.id | Login</title>
    <link rel="shortcut icon" href="assets/Logo.jpeg" type="image/x-icon">
    @vite('resources/css/app.css')
  </head>
  <body>
    <x-navbar></x-navbar>

    <div class="w-[80%] min-h-[80vh] mx-[10%] my-[10vh] flex items-center justify-center">
      <div class="mt-12 h-fit max-w-[440px] w-full">
        <div class="text-shadow1 pb-14 font-semibold text-size3">
          <p class="-mb-1 text-custom-blue text-center">
            Login
          </p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <input
                type="email"
                class="input1 w-full shadow-custom1 text-size1"
                placeholder="Email"
                name="email"
                value="{{ old('email') }}"
            />
            @error('email')
                <p class="font-semibold text-red-600 w-full ml-5 text-size1">
                    {{ $message }}
                </p>
            @enderror

            <input
                type="password"
                class="input1 mt-7 w-full shadow-custom1 text-size1"
                placeholder="Password"
                name="password"
                value="{{ old('password') }}"
            />
            @error('password')
                <p class="font-semibold text-red-600 w-full ml-5 text-size1">
                    {{ $message }}
                </p>
            @enderror

            <div class="flex pt-14">
              <button class="button1 h-14 w-full shadow-custom1 text-size1" type="submit">Login</button>
            </div>
        </form>

        <div class="w-full pt-14 text-center text-size1">
          Belum punya akun?
          <a href="{{ route('register') }}" class="font-bold underline hover:text-custom-lightgrey"
            >Ayo buat disini</a
          >!
        </div>
      </div>
    </div>

    <x-footer></x-footer>
  </body>
</html>