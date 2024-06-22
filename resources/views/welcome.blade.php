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
      <div class="mt-12 h-fit flex-row justify-center">
        <div class="text-shadow1 pb-14 text-6xl font-semibold">
          <p class="-mb-2 text-custom-blue">
            Pendekin<span class="text-custom-grey">,</span>
          </p>
          <p class="-mb-2 text-custom-blue">kustomin</p>
          <p class="-mb-2">link kamu</p>
          <p>jadi <span class="text-custom-blue">gampang</span>!</p>
        </div>
        <form action="/store" method="POST">
            @csrf
            <div class="flex-col">
            <input
                class="input1 shadow-custom1 w-full"
                placeholder="masukin link belum keren"
                name="Source"
                value="{{ old('Source') }}"
            />
            @error('Source')
                <p class="font-semibold text-red-600 pl-5">
                    {{ $message }}
                </p>
            @enderror
            </div>
            <!-- <textarea rows="1" class="w-760px text-white p-3 pl-8 font-light bg-custom-blue placeholder-white rounded-full border-4 border-custom-grey outline-none resize-none focus:bg-custom-grey focus:border-custom-blue" placeholder="Masukin link belum keren"></textarea> -->
            <div class="flex items-start justify-between gap-4 pt-7">
              <p class="text-xl font-bold pt-3.5">pendekinlink.id/</p>
              <div class="flex-col w-full">
                <input
                    class="input1 shadow-custom1 w-full"
                    placeholder="masukin belakang link keren"
                    name="Link"
                    value="{{ old('Link') }}"
                />
                @error('Link')
                    <p class="font-semibold text-red-600 pl-5">
                        {{ $message }}
                    </p>
                @enderror
              </div>
            </div>
            
            
            <div class="flex pt-14">
            <button class="button1 shadow-custom1 h-20 w-full" type="submit">
                Pendekin link!
            </button>
            </div>
        </form>
        <div class="w-full pt-14 text-center">
          Kalau kamu pake pendekinlink.id, kamu setuju sama
          <a href="" class="font-bold underline hover:text-custom-lightgrey"
            >terms of service</a
          >
          kita yaa
        </div>
      </div>
    </div>

    <div class="h-screen flex justify-center items-center">
      <div class="">
        <p class="text-xl w-fit mb-3.5"><span class="font-bold">Klik link</span> kamu <span class="font-bold">untuk copy</span> linknya!</p>
        <a class="text-2xl font-bold underline text-custom-blue text-shadow3 hover:opacity-80" href="">pendekinlink.id/contohlinkpendekgantiya</a>
        <div>
          <button class="mt-7 button1 shadow-custom1 h-20 w-full">
            Balik pendekin link!
          </button>
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
