<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/output.css" />
    <title>pendekinlink.id</title>
    <link rel="shortcut icon" href="assets/Logo.jpeg" type="image/x-icon">
    @vite('resources/css/app.css')
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
                    <div class="flex flex-row w-full justify-between">
                        <p class="text-xl w-fit mb-3.5"><span class="font-bold">Klik link</span> kamu <span class="font-bold">untuk copy</span> linknya!</p>
                        
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                            </li>
                            </ul>
                        </div>

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
  </body>
</html>
