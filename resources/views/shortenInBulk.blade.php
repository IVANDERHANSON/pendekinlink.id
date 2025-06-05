<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pendekinlink.id | Shorten In Bulk</title>
    <link rel="shortcut icon" href="assets/Logo.jpeg" type="image/x-icon">
    @vite('resources/css/app.css')

    <!-- feathericons.com -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <!-- <div class="absolute w-full px-12 py-4 shadow-nav">
    <div class="flex justify-between items-center">
      <p class="tracking-tighter font-bold text-4xl text-custom-blue">pendekin.ly</p>
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
      <!-- show link -->
      <div class="flex-col flex min-h-screen justify-center items-center">
        <div class="">

          @foreach (session('success') as $bulk)
            <p class="text-xl w-fit mb-3.5"><span class="font-bold">Link</span> kamu <span class="font-bold">berhasil dikustom</span>!</p>
            <a class="text-2xl font-bold underline text-custom-blue text-shadow3 hover:opacity-80" href="https://pendekinlink.id/{{ $bulk['Link'] }}" target="_blank">https://pendekinlink.id/{{ $bulk['Link'] }}</a>

            <div class="h-[2px] bg-custom-whitegrey w-full my-8"></div>
          @endforeach

          <div>
            <button class="mt-11 button1 shadow-custom1 h-20 w-full" id="back">
              Balik pendekin link!
            </button>
          </div>
        </div>
      </div>
    @elseif (Cookie::get('bulk'))
      <!-- input link detail -->
      <div class="flex-col flex min-h-screen justify-center items-center">
        <div class="">
        
          <form action="/store-shorten-in-bulk" method="POST">
            @csrf
            @for ($i = 0; $i < Cookie::get('bulk'); $i++)
            <div>
                  <p class="text-xl w-fit mb-3.5">Masukin <span class="font-bold">link awal</span> sama<span class="font-bold"> link pendek</span> kamu!</p>
                  <div class="flex-col">
                  <input
                      class="input1 shadow-custom1 w-full"
                      placeholder="masukin link belum keren"
                      name="Bulks[{{ $i }}][Source]"
                      value="{{ old('Bulks.'.$i.'.Source') }}"
                  />
                  @error('Bulks.'.$i.'.Source')
                      <p class="font-semibold text-red-600 pl-5">
                          {{ $message }}
                      </p>
                  @enderror
                  </div>
                  <!-- <textarea rows="1" class="w-760px text-white p-3 pl-8 font-light bg-custom-blue placeholder-white rounded-full border-4 border-custom-grey outline-none resize-none focus:bg-custom-grey focus:border-custom-blue" placeholder="Masukin link belum keren"></textarea> -->
                  <div class="flex items-start justify-between gap-4 pt-5">
                    <p class="text-xl font-bold pt-3.5">pendekinlink.id/</p>
                    <div class="flex-col w-full">
                      @if (session('randomLink'))
                        <input
                            class="input1 shadow-custom1 w-full"
                            placeholder="masukin belakang link keren"
                            name="Bulks[{{ $i }}][Link]"
                            value="{{ session('randomLink').$i+1 }}"
                        />
                      @else
                        <input
                            class="input1 shadow-custom1 w-full"
                            placeholder="masukin belakang link keren"
                            name="Bulks[{{ $i }}][Link]"
                            value="{{ old('Bulks.'.$i.'.Link') }}"
                        />
                      @endif
                      @error('Bulks.'.$i.'.Link')
                          <p class="font-semibold text-red-600 pl-5">
                              {{ $message }}
                          </p>
                      @enderror
                    </div>
                    <button id="generateRandomLink{{ $i }}" class="h-14 px-[15px]  shadow-custom1 rounded-full border-3 bg-custom-grey  border-custom-black text-custom-white hover:bg-opacity-85 hover:border-custom-grey" type="button"><i data-feather="refresh-cw" class="text-custom-white h-full w-5"></i></button>
                  </div>
                  <div class="h-[2px] bg-custom-whitegrey w-full my-12"></div>
                </div>
                @endfor

                <div class="flex justify-center items-center gap-4">
                  <p>Total Link: {{ Cookie::get('bulk') }}</p>
                  <button class="flex flex-row justify-center items-center gap-2 bg-custom-blue text-white px-2 py-2 rounded-lg border-3 border-custom-black shadow-custom1 hover:bg-opacity-85 hover:border-custom-grey" type="button" id="editBulk"><i data-feather="edit" class="text-custom-white h-[2vh]"></i></button>
                </div>
                
                <div class="flex pt-14">
                    <button class="button1 shadow-custom1 h-20 w-[600px]" type="submit">
                        Pendekin banyak link!
                    </button>
                </div>
            </form>

            <form action="/edit-bulk" method="POST" class="hidden" id="editBulkForm">
              @csrf
            </form>

            @for ($i = 0; $i < Cookie::get('bulk'); $i++)
              <form action="/generate-random-link" method="POST" id="generateRandomLinkForm{{ $i }}">
                @csrf
              </form>
              
              <script>
                document.getElementById('generateRandomLink{{ $i }}').addEventListener('click', function() {
                    document.getElementById('generateRandomLinkForm{{ $i }}').submit();
                });
              </script>
            @endfor

        </div>
      </div>
    @else
      <!-- input total link -->
      <div class="flex min-h-screen justify-center items-center">
              <div class="">
                <p class="text-xl mb-3.5">Berapa <span class="font-bold">total link </span>yang<br> mau dipendekin?</p>
                {{-- <div class="relative flex items-center justify-center shadow-custom1 rounded-full"> --}}
            <div class="relative flex items-center justify-center rounded-full">
              <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="h-14 w-14 pl-1 text-3xl rounded-l-full bg-custom-grey border-3 border-r-0 border-custom-black text-white hover:border-custom-grey hover:bg-custom-lightgrey">
                -
              </button>
              <form action="/shorten-in-bulk/store" method="POST" id="shortenInBulkForm">
                @csrf
                <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="resize-none border-3 border-custom-black bg-custom-blue h-14 p-2.5 px-5 font-normal text-custom-white placeholder-custom-white outline-none focus:border-custom-blue focus:bg-custom-grey max-w-[88.16px] text-center" name="Bulk" value="{{ old('Bulk') }}" placeholder="0" required />
              </form>
              <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="h-14 w-14 pr-1 text-2xl rounded-r-full bg-custom-grey border-3 border-l-0 border-custom-black text-white hover:border-custom-grey hover:bg-custom-lightgrey">
                +
              </button>
            </div>
            @error('Bulk')
                <p class="font-semibold text-red-600">
                    {{ $message }}
                </p>
            @enderror

                <div>
                  <button class="mt-7 button1 shadow-custom1 h-20 w-full" type="button" id="shortenInBulkButton">
                    Lanjut!
                  </button>
                </div>
              </div>
      </div>
      <script>
        document.getElementById('decrement-button').addEventListener('click', function () {
          var input = document.getElementById('quantity-input');
          var currentValue = parseInt(input.value) || 0;
          if (currentValue > 0) {
            input.value = currentValue - 1;
          }
        });

        document.getElementById('increment-button').addEventListener('click', function () {
          var input = document.getElementById('quantity-input');
          var currentValue = parseInt(input.value) || 0;
          input.value = currentValue + 1;
        });
      </script>
    @endif

    <!-- footer -->
    <x-footer></x-footer>

    <!-- feathericons.com -->
    <script>
        feather.replace()
    </script>

    @if (session('success'))
      <script>
        document.getElementById('back').addEventListener('click', function() {
            window.location.href = '/shorten-in-bulk';
        });
      </script>
    @elseif (Cookie::get('bulk'))
      <script>
        document.getElementById('editBulk').addEventListener('click', function() {
            document.getElementById('editBulkForm').submit();
        });
      </script>
      @error ('Bulks')
        <script>
          alert("{{ $message }}");
        </script>
      @enderror
    @else
      <script>
        document.getElementById('shortenInBulkButton').addEventListener('click', function() {
            document.getElementById('shortenInBulkForm').submit();
        });
      </script>
    @endif
  </body>
</html>
