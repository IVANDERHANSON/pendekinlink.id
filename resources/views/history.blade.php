<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pendekinlink.id | History</title>
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

    @if ($exists)
      <div  class="flex min-h-screen items-center justify-evenly">
          <div class="flex flex-col items-center">
              <!-- category -->
              <div class="flex w-[50vw] justify-between gap-4">
                  <div class="w-[47.5vw] overflow-y-visible overflow-x-auto whitespace-nowrap">
                      <ul class="flex flex-row text-nowrap gap-4">
                          <li class="minibutton1 cursor-pointer" id="allCategory">All</li>
                          @foreach ($categories as $category)
                            <div class="minibutton1 gap-2 cursor-pointer">
                              <li id="categoryPage{{ $category->id }}">{{ $category->Name }}</li>
                              <button class="flex justify-center items-center" type="button" id="deleteCategory{{ $category->id }}"><i data-feather="trash" class="text-red-600 h-[2vh] hover:text-red-700 hover:bg-custom-grey hover:bg-opacity-25 rounded-full"></i></button>
                            </div>
                            
                            <form action="/delete-category/{{ $category->id }}" method="POST" class="hidden" id="deleteCategoryForm{{ $category->id }}">
                              @csrf
                            </form>

                            <script>
                              document.getElementById('deleteCategory{{ $category->id }}').addEventListener('click', function() {
                                document.getElementById('deleteCategoryForm{{ $category->id }}').submit();
                              });

                              document.getElementById('categoryPage{{ $category->id }}').addEventListener('click', function() {
                                window.location.href = '/history/{{ $category->id }}';
                              });
                            </script>
                          @endforeach
                          </ul>
                  </div>
                  <button class="rounded-lg text-3xl border-3 border-custom-black font-semibold text-custom-white shadow-custom1 hover:border-custom-grey hover:bg-opacity-85 h-[2.5vw] w-[2.5vw] bg-custom-blue flex justify-center items-center" type="button" id="addCategory">+</button>
              </div>
              <!-- history cards -->
                <div class="flex flex-col w-full">

                  @foreach ($customizedLinks as $customizedLink)
                    <div class="h-[2px] bg-custom-whitegrey w-full my-8"></div>

                      <div class=" w-full flex flex-row justify-between">

                        <div class="flex flex-col justify-between">
                        {{-- <p class="text-xl w-fit mb-3.5"><span class="font-bold">Klik link</span> kamu <span class="font-bold">untuk copy</span> linknya!</p> --}}
                          <div>
                          <p class="text-xl font-semibold text-custom-lightgrey mb-1.5 overflow-hidden">{{ $customizedLink->Source }}</p>
                          <a class="text-2xl font-bold underline text-custom-blue text-shadow3 hover:opacity-80" href="https://pendekinlink.id/{{ $customizedLink->Link }}" target="_blank">https://pendekinlink.id/{{ $customizedLink->Link }}</a>
                          </div>
                        </div>

                        <div class="flex flex-col gap-[4vh]">
                          <p class="text-end font-bold"><span class="text-xl text-custom-blue">{{ $customizedLink->TotalVisited }}</span> total kunjungan</p>

                          <div class="flex gap-4">
                            <button class="flex flex-row justify-center items-center gap-2 bg-custom-blue text-white px-4 py-2 rounded-lg border-3 border-custom-black shadow-custom1 hover:bg-opacity-85 hover:border-custom-grey" type="button" id="editLink{{ $customizedLink->id }}"><i data-feather="edit" class="text-custom-white h-[2vh]"></i></button>

                            <script>
                              document.getElementById('editLink{{ $customizedLink->id }}').addEventListener('click', function() {
                                  window.location.href = '/edit-link/{{ $customizedLink->id }}';
                              });
                            </script>

                            <div class="relative">
                              <button id="dropdownButton{{ $customizedLink->id }}" class="flex flex-row justify-center items-center gap-2 px-4 py-2 rounded-lg border-3 bg-custom-grey  border-custom-black text-custom-white shadow-custom1 hover:bg-opacity-85 hover:border-custom-grey">
                                @if (!$customizedLink->category)
                                  Masukin kategori
                                @else
                                  {{ $customizedLink->category->Name }}
                                @endif
                                <i data-feather="chevron-down" class="text-custom-white"></i></button>
                              <!-- Dropdown list -->
                              <ul id="dropdownList{{ $customizedLink->id }}" class="absolute hidden bg-white border rounded shadow-custom1 mt-1 w-full z-10">
                                  @forelse (auth()->user()->categories as $category)
                                    <li class="py-2 px-4 hover:bg-custom-whitegrey cursor-pointer" id="addLinkCategory{{ $customizedLink->id.$category->id }}">{{ $category->Name }}</li>

                                    <form action="/add-link-category/{{ $customizedLink->id }}/{{ $category->id }}" method="POST" class="hidden" id="addLinkCategoryForm{{ $customizedLink->id.$category->id }}">
                                      @csrf
                                    </form>
                                    
                                    <script>
                                      document.getElementById('addLinkCategory{{ $customizedLink->id.$category->id }}').addEventListener('click', function() {
                                        document.getElementById('addLinkCategoryForm{{ $customizedLink->id.$category->id }}').submit();
                                      });
                                    </script>
                                  @empty
                                    <li class="py-2 px-4 hover:bg-custom-whitegrey cursor-pointer">Belum ada kategori yang dibuat.</li>
                                  @endforelse
                              </ul>

                              <script>
                                // Get dropdown elements
                                const dropdownButton{{ $customizedLink->id }} = document.getElementById('dropdownButton{{ $customizedLink->id }}');
                                const dropdownList{{ $customizedLink->id }} = document.getElementById('dropdownList{{ $customizedLink->id }}');

                                // Toggle dropdown visibility
                                dropdownButton{{ $customizedLink->id }}.addEventListener('click', () => {
                                    dropdownList{{ $customizedLink->id }}.classList.toggle('hidden');
                                });

                                // Hide dropdown on outside click
                                document.addEventListener('click', (e) => {
                                    if (!dropdownButton{{ $customizedLink->id }}.contains(e.target)) {
                                        dropdownList{{ $customizedLink->id }}.classList.add('hidden');
                                    }
                                });
                              </script>
                            </div>
                            
                          </div>
                        </div>
                          
                      </div>
                  @endforeach

                  {{-- <div class="h-[2px] bg-custom-whitegrey w-full my-8"></div> --}}

                  <!-- card start -->
                  {{-- <div class=" w-full flex flex-row justify-between">

                    <div class="flex flex-col justify-between">
                    <p class="text-xl w-fit mb-3.5"><span class="font-bold">Klik link</span> kamu <span class="font-bold">untuk copy</span> linknya!</p>
                      <div>
                      <p class="text-xl font-semibold text-custom-lightgrey mb-1.5 overflow-hidden">linkpanjang.com/contohlinksebelumpendekgantiya</p>
                      <a class="text-2xl font-bold underline text-custom-blue text-shadow3 hover:opacity-80" href="">pendekinlink.id/contohlinkpendekgantiya</a>
                      </div>
                    </div>

                    <div class="flex flex-col gap-[4vh]">
                      <p class="text-end font-bold"><span class="text-xl text-custom-blue">120</span> total kunjungan</p>

                      <div class="flex gap-4">
                      <button class="flex flex-row justify-center items-center gap-2 bg-custom-blue text-white px-4 py-2 rounded-lg border-3 border-custom-black shadow-custom1 hover:bg-opacity-85 hover:border-custom-grey"><i data-feather="edit" class="text-custom-white h-[2vh]"></i></button>
                        <div class="relative">
                        <button id="dropdownButton" class="flex flex-row justify-center items-center gap-2 px-4 py-2 rounded-lg border-3 bg-custom-grey  border-custom-black text-custom-white shadow-custom1 hover:bg-opacity-85 hover:border-custom-grey">Masukin kategori <i data-feather="chevron-down" class="text-custom-white"></i></button>
                          <!-- Dropdown list -->
                          <ul id="dropdownList" class="absolute hidden bg-white border rounded shadow-custom1 mt-1 w-full">
                              <li class="py-2 px-4 hover:bg-custom-whitegrey cursor-pointer">category 1</li>
                              <li class="py-2 px-4 hover:bg-custom-whitegrey cursor-pointer">category 2</li>
                              <li class="py-2 px-4 hover:bg-custom-whitegrey cursor-pointer">category 3</li>
                              <li class="py-2 px-4 hover:bg-custom-whitegrey cursor-pointer">category 4</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div> <!-- card end --> --}}
                  
                  {{-- <div class="h-[2px] bg-custom-whitegrey w-full my-8"></div> --}}

                  <!-- card start -->
                  {{-- <div class=" w-full flex flex-row justify-between">

                    <div class="flex flex-col justify-between">
                    <p class="text-xl w-fit mb-3.5"><span class="font-bold">Klik link</span> kamu <span class="font-bold">untuk copy</span> linknya!</p>
                      <div>
                      <p class="text-xl font-semibold text-custom-lightgrey mb-1.5 overflow-hidden">linkpanjang.com/contohlinksebelumpendekgantiya</p>
                      <a class="text-2xl font-bold underline text-custom-blue text-shadow3 hover:opacity-80" href="">pendekinlink.id/contohlinkpendekgantiya</a>
                      </div>
                    </div>

                    <div class="flex flex-col gap-[4vh]">
                      <p class="text-end font-bold"><span class="text-xl text-custom-blue">120</span> total kunjungan</p>

                      <div class="flex gap-4">
                      <button class="flex flex-row justify-center items-center gap-2 bg-custom-blue text-white px-4 py-2 rounded-lg border-3 border-custom-black shadow-custom1 hover:bg-opacity-85 hover:border-custom-grey"><i data-feather="edit" class="text-custom-white h-[2vh]"></i></button>
                        <div class="relative">
                        <button id="dropdownButton" class="flex flex-row justify-center items-center gap-2 px-4 py-2 rounded-lg border-3 bg-custom-grey  border-custom-black text-custom-white shadow-custom1 hover:bg-opacity-85 hover:border-custom-grey">Masukin kategori <i data-feather="chevron-down" class="text-custom-white"></i></button>
                          <!-- Dropdown list -->
                          <ul id="dropdownList" class="absolute hidden bg-white border rounded shadow-custom1 mt-1 w-full">
                              <li class="py-2 px-4 hover:bg-custom-whitegrey cursor-pointer">category 1</li>
                              <li class="py-2 px-4 hover:bg-custom-whitegrey cursor-pointer">category 2</li>
                              <li class="py-2 px-4 hover:bg-custom-whitegrey cursor-pointer">category 3</li>
                              <li class="py-2 px-4 hover:bg-custom-whitegrey cursor-pointer">category 4</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div> <!-- card end --> --}}
                </div>
          </div>
      </div>
    @else
      <div class="flex min-h-screen items-center justify-evenly">
          <div class="flex flex-col items-center text-xl">
              Riwayat kamu masih kosong :(<br><div><a class="font-bold underline" href="/">pendekin link</a> yuk! </div>
          </div>
      </div>
    @endif


    <!-- footer -->
    <x-footer></x-footer>

    <script>
        document.getElementById('addCategory').addEventListener('click', function() {
            window.location.href = '/add-category';
        });

        document.getElementById('allCategory').addEventListener('click', function() {
            window.location.href = '/history';
        });
    </script>

    <!-- feathericons.com -->
    <script>
        feather.replace()
    </script>

    @if (session('categorizedLinkNull'))
      <script>
        alert("{{ session('categorizedLinkNull') }}");
      </script>
    @endif
  </body>
</html>
