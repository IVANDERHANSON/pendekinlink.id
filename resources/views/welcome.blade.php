<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/output.css" />
    <title>pendekinlink.id</title>
    <link rel="shortcut icon" href="assets/Logo.jpeg" type="image/x-icon">
    @vite('resources/css/app.css')
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

    @if (session('success'))
      <div class="h-screen flex justify-center items-center">
        <div class="">
          <p class="text-xl w-fit mb-3.5"><span class="font-bold">Link</span> kamu <span class="font-bold">berhasil dikustom</span>!</p>
          <a class="text-2xl font-bold underline text-custom-blue text-shadow3 hover:opacity-80" href="{{ session('success') }}" target="_blank">{{ session('success') }}</a>
          <div>
            <button class="mt-7 button1 shadow-custom1 h-20 w-full" id="back">
              Balik pendekin link!
            </button>
          </div>
        </div>
      </div>
    @else
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
                <div class="w-full">
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
                        value="{{ old('Link') }}"
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
              
              
              <div class="flex pt-14">
              <button class="button1 shadow-custom1 h-20 w-full" type="submit">
                  Pendekin link!
              </button>
              </div>
          </form>
          <form action="/generate-random-link" method="POST" id="generateRandomLinkForm">
            @csrf
          </form>
          <div class="w-full pt-14 text-center">
            Kalau kamu pake pendekinlink.id, kamu setuju sama
            <a href="#" class="font-bold underline hover:text-custom-lightgrey"
              >terms of service</a
            >
            kita yaa
          </div>
        </div>
      </div>
    @endif

    <!-- footer -->
    <x-footer></x-footer>
    
    {{-- @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif --}}

    <script>
        feather.replace()
    </script>

    @if (session('success'))
      <script>
        document.getElementById('back').addEventListener('click', function() {
            window.location.href = '/';
        });
      </script>
    @endif

    <script>
      document.getElementById('dropdownButton').addEventListener('click', function() {
          document.getElementById('generateRandomLinkForm').submit();
      });
    </script>
  </body>
</html>
