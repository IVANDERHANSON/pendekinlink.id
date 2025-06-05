<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pendekinlink.id | Add Category</title>
    <link rel="shortcut icon" href="assets/Logo.jpeg" type="image/x-icon">
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
      <form action="/store-category" method="POST">
        @csrf
      <p class="text-xl w-full"><span class="font-bold">Kategori apa</span> yang mau ditambah?</p>

      <div class="flex items-start justify-between pt-3.5">
              <div class="flex-col w-full">
                <input
                    class="input1 shadow-custom1 w-full"
                    placeholder="masukin kategori baru"
                    name="CategoryName"
                    value="{{ old('CategoryName') }}"
                />
                @error('CategoryName')
                    <p class="font-semibold text-red-600 pl-5">
                        {{ $message }}
                    </p>
                @enderror
              </div>
      </div>

      <div class="flex pt-14 gap-4 ">
            <button class="button1 shadow-custom1 h-20 w-[360px]" type="submit">
                Tambah kategori!
            </button>
        </div>
      
        <div class="w-full pt-14 text-center">
          Gajadi tambah kategori?
          <a href="/history" class="font-bold underline hover:text-custom-lightgrey"
            >Balik history yuk</a
          >!
        </div>
      </form>
    </div>
    
    <x-footer></x-footer>
    
    <!-- feathericons.com -->
    <script>
        feather.replace()
    </script>
  </body>
</html>
