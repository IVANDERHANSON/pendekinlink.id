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

    <div class="flex min-h-screen items-center justify-evenly">
        <div class="flex flex-col items-center ">
            Riwayat kamu masih kosong :(<br><div><a class="font-bold underline" href="">pendekin link</a> yuk! </div>
        </div>
    </div>

    <div  class="flex min-h-screen items-center justify-evenly">
        <div class="flex flex-col items-center">
            <!-- category -->
            <div class="flex w-[45vw] justify-between gap-4">
                <div class="w-[42.5vw] overflow-x-auto whitespace-nowrap">
                    <ul class="flex flex-row text-nowrap gap-4">
                        <li class="minibutton1">All</li>
                        <li class="minibutton1">category 1</li>
                        <li class="minibutton1">category 2</li>
                        <li class="minibutton1">category 3</li>
                        <li class="minibutton1">category 3</li>
                        <li class="minibutton1">category 3</li>

                        <li class="minibutton1">category 3</li>
                    </ul>
                </div>
                <button class="rounded-lg text-3xl border-3 border-custom-black font-semibold text-custom-white hover:border-custom-grey hover:bg-opacity-90 h-[2.5vw] w-[2.5vw] bg-custom-blue">+</button>
            </div>
            <!-- history cards -->
             <div class="flex flex-col w-full mt-4">
                <div class="bg-red-500 w-full">
                <div class="relative">
        <!-- Dropdown button -->
        <button id="dropdownButton" class="flex flex-row justify-center items-center gap-2 bg-blue-500 text-white px-4 py-2 rounded shadow">Select Option <i data-feather="chevron-down" class="text-custom-white"></i></button>
        <!-- Dropdown list -->
        <ul id="dropdownList" class="absolute hidden bg-white border rounded shadow mt-1 w-48">
            <li class="py-2 px-4 hover:bg-blue-100 cursor-pointer">Option 1</li>
            <li class="py-2 px-4 hover:bg-blue-100 cursor-pointer">Option 2</li>
            <li class="py-2 px-4 hover:bg-blue-100 cursor-pointer">Option 3</li>
        </ul>
    </div>
                    
                    <p class="text-xl font-semibold text-custom-lightgrey mb-1.5 overflow-hidden">linkpanjang.com/contohlinksebelumpendekgantiya</p>
                    <a class="text-2xl font-bold underline text-custom-blue text-shadow3 hover:opacity-80" href="">pendekinlink.id/contohlinkpendekgantiya</a>
                </div>
                <div class="h-[2px] bg-custom-whitegrey w-full my-7"></div>
             </div>
        </div>
    </div>

    <!-- footer -->
    <div class="flex bg-custom-black text-custom-white">
      <div class="flex-row w-full rounded-lg border-3 border-custom-black bg-custom-grey px-24 py-12">
        <p class="text-shadow2 text-3xl font-semibold min-[1613px]:whitespace-nowrap">
          Cerita <span class="text-custom-blue">awal mula</span>.
        </p>
        <p class="mt-7 font-normal">
Berawal dari visi sekelompok anak muda kreatif, pendekinlink.id menawarkan fitur unggulan seperti analitik real-time dan antarmuka yang mudah digunakan. Solusi praktis ini sangat bermanfaat bagi pelaku bisnis, pemasar digital, dan pengguna internet umum yang ingin menyederhanakan tautan untuk promosi, berbagi informasi, atau merapikan tampilan link dengan efisien.</p>
      </div>

      <div
        class="flex w-fit rounded-lg border-3 border-x-0 border-custom-black bg-custom-grey px-24 py-12"
      >
        <div>
          <p
            class="text-shadow2 text-3xl font-semibold min-[1613px]:whitespace-nowrap"
          >
            Ada <span class="text-custom-blue">masalah</span> atau pengen
            <span class="text-custom-blue">tanya²</span>?
          </p>
          <input
            class="input2 mt-7 w-full shadow-custom2"
            placeholder="masukin email kamu"
          />
          <textarea
            class="input2 mt-7 h-40 w-full shadow-custom2"
            placeholder="masukin pesan kamu"
          ></textarea>

          <button class="button2 shadow-custom2 h-20 w-full mt-5 " type="submit">
                Kirim pesan!
            </button>
        </div>
      </div>

      <div
        class="flex w-fit justify-evenly rounded-lg border-3 border-custom-black bg-custom-grey px-24 py-12"
      >
        <div class="flex-row text-shadow2">
          <p
            class=" text-3xl font-semibold text-custom-white min-[1613px]:whitespace-nowrap"
          >
            Tim <span class="text-custom-blue">pengembang</span>.
            <div class="mt-7 min-[1613px]:whitespace-nowrap">
              <p class="text-xl font-medium"> Ignatius De Loyola Jurian Ratria Galih</p>
              <div>
                <p class="text-xl font-medium mt-3.5"> Ivander Hanson Setyawan</p>
                <p class="text-xl font-medium mt-3.5"> Evan Andhika Rusli</p>
                <p class="text-xl font-medium mt-3.5"> Nixon Budhimulja</p>
                <p class="text-xl font-medium mt-3.5"> Fadhil Munzir</p>
              </div>
            </div>
          </p>
        </div>
      </div>
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
