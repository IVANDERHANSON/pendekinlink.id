<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/output.css" />
    <title>pendekinlink.id | Edit Link</title>
    <link rel="shortcut icon" href="{{ asset('assets/Logo.jpeg') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <style>
.custom-arrow {
  appearance: none;
  background-image: url('{{ asset('/assets/chevron-down.svg') }}');
}
</style>
<!-- feathericons.com -->
<script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <!-- <div class="absolute w-full px-12 py-4 shadow-nav">
    <div class="flex justify-between items-center">
      <p class="tracking-tighter font-bold text-4xl text-custom-blue">pendekinlink.id</p>
      <ul class="flex space-x-8 font-medium">
        <li><a href="">Pendekin link</a></li>
        <li><a href="">Pendekin banyak link</a></li>
        <li><p class="text-custom-lightgrey cursor-default">Riwayat</p></li>
        <li><a href="">Masuk</a></li>
      </ul>
    </div>
  </div> -->

    <!-- navbar -->
    <x-navbar></x-navbar>

    <div class="flex flex-col min-h-screen items-center justify-evenly">
      <form action="/update-link/{{ $customizedLink->id }}" method="POST">
        @csrf
        <div class="flex items-start justify-between gap-4 pb-3.5">
          <div class="flex-col w-full">
            <input
                  class="input1 shadow-custom1 w-full"
                  placeholder="masukin link belum keren"
                  name="Source"
                  value="{{ $customizedLink->Source }}"
              />
              @error('Source')
                  <p class="font-semibold text-red-600 pl-5">
                      {{ $message }}
                  </p>
              @enderror
          </div>
        </div>

        <div class="flex items-start justify-between gap-4 pt-3.5">
          <p class="text-xl font-bold pt-3.5">pendekinlink.id/</p>
                <div class="flex-col w-full">
                  @if (session('randomLink'))
                      <input
                          class="input1 shadow-custom1 w-full"
                          placeholder="masukin belakang link keren"
                          name="Link"
                          value="{{ session('randomLink') }}"
                      />
                    @else
                      <input
                          class="input1 shadow-custom1 w-full"
                          placeholder="masukin belakang link keren"
                          name="Link"
                          value="{{ $customizedLink->Link }}"
                      />
                    @endif
                  @error('Link')
                      <p class="font-semibold text-red-600 pl-5">
                          {{ $message }}
                      </p>
                  @enderror
                </div>
                <button id="dropdownButton" class="h-14 px-[15px]  shadow-custom1 rounded-full border-3 bg-custom-grey  border-custom-black text-custom-white hover:bg-opacity-85 hover:border-custom-grey" type="button"><i data-feather="refresh-cw" class="text-custom-white h-full w-5"></i></button>
        </div>

      <div class="flex pt-14 gap-4 ">
            <button class="button1 shadow-custom1 h-20 w-[520px]" type="submit">
                Ubah link!
            </button>
        </div>
      
        <div class="w-full pt-10 text-center">
          Gajadi ubah link?
          <a href="/history" class="font-bold underline hover:text-custom-lightgrey"
            >Balik history yuk</a
          >!
        </div>
      </form>
    </div>
    <form action="/generate-random-link" method="POST" id="generateRandomLinkForm">
      @csrf
    </form>

    <!-- footer -->
    <x-footer></x-footer>
    
    <!-- feathericons.com -->
    <script>
        feather.replace()
    </script>

    <script>
      document.getElementById('dropdownButton').addEventListener('click', function() {
          document.getElementById('generateRandomLinkForm').submit();
      });
    </script>
  </body>
</html>
