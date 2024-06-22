<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/output.css" />
    <title>pendekinlink.id</title>
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
    <div class="absolute w-full bg-custom-black text-custom-white">
      <div class="flex">
        <div
          class="flex w-full items-center rounded-lg border-3 border-custom-black bg-custom-grey px-8 py-3"
        >
        <a href="" class="text-2xl font-bold tracking-tight text-custom-white"
        >pendekinlink<span class="text-3xl text-custom-blue">.</span>id</a
          >
        </div>
        <ul
          class="flex w-fit items-center space-x-8 rounded-lg border-3 border-l-0 border-r-0 border-custom-black bg-custom-grey px-8 py-3 font-medium min-[909px]:whitespace-nowrap"
        >
          <li><a href="" class="hover:text-custom-blue">Pendekin link</a></li>
          <li>
            <a href="" class="hover:text-custom-blue">Pendekin banyak link</a>
          </li>
          @if (Auth::user())
            <li><a href="" class="hover:text-custom-blue">Riwayat</a></li>
          @else
            <li><p class="cursor-default text-custom-lightgrey">Riwayat</p></li>
          @endif
        </ul>
        @if (Auth::user())
            <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                @csrf
            </form>
            <button
            class="flex items-center rounded-lg border-3 border-custom-black bg-custom-grey px-8 py-3 font-medium hover:bg-custom-blue"
            id="logout"
            >
            Keluar
            </button>
        @else
            <button
            class="flex items-center rounded-lg border-3 border-custom-black bg-custom-grey px-8 py-3 font-medium hover:bg-custom-blue"
            id="login"
            >
            Masuk
            </button>
        @endif
      </div>
    </div>

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
    
    @if (Auth::user())
        <script>
            document.getElementById('logout').addEventListener('click', function() {
                document.getElementById('logoutForm').submit();
            });
        </script>
    @else
        <script>
            const login = document.getElementById('login');
            login.addEventListener('click', function() {
                window.location.href = '{{ route('login') }}';
            });
        </script>
    @endif
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    <script>
        // Get dropdown elements
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownList = document.getElementById('dropdownList');

        // Toggle dropdown visibility
        dropdownButton.addEventListener('click', () => {
            dropdownList.classList.toggle('hidden');
        });

        // Hide dropdown on outside click
        document.addEventListener('click', (e) => {
            if (!dropdownButton.contains(e.target)) {
                dropdownList.classList.add('hidden');
            }
        });
    </script>
    <!-- feathericons.com -->
    <script>
        feather.replace()
    </script>
  </body>
</html>
