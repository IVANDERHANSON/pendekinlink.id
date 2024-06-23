<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/output.css" />
    <title>pendekinlink.id | History</title>
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

    @forelse ($customizedLinks as $customizedLink)
      <div  class="flex min-h-screen items-center justify-evenly">
          <div class="flex flex-col items-center">
              <!-- category -->
              <div class="flex w-[50vw] justify-between gap-4">
                  <div class="w-[47.5vw] overflow-y-visible overflow-x-auto whitespace-nowrap">
                      <ul class="flex flex-row text-nowrap gap-4">
                          <li class="minibutton1">All</li>
                          <li class="minibutton1 gap-2">category 1 <button class="flex justify-center items-center"><i data-feather="trash" class="text-red-600 h-[2vh] hover:text-red-700 hover:bg-custom-grey hover:bg-opacity-25 rounded-full"></i></button></li>
                          <li class="minibutton1 gap-2">category 2 <button class="flex justify-center items-center"><i data-feather="trash" class="text-red-600 h-[2vh] hover:text-red-700 hover:bg-custom-grey hover:bg-opacity-25 rounded-full"></i></button></li></li>
                          <li class="minibutton1 gap-2">category 3 <button class="flex justify-center items-center"><i data-feather="trash" class="text-red-600 h-[2vh] hover:text-red-700 hover:bg-custom-grey hover:bg-opacity-25 rounded-full"></i></button></li></li>
                          <li class="minibutton1 gap-2">category 4 <button class="flex justify-center items-center"><i data-feather="trash" class="text-red-600 h-[2vh] hover:text-red-700 hover:bg-custom-grey hover:bg-opacity-25 rounded-full"></i></button></li></li>
                          </ul>
                  </div>
                  <button class="rounded-lg text-3xl border-3 border-custom-black font-semibold text-custom-white shadow-custom1 hover:border-custom-grey hover:bg-opacity-85 h-[2.5vw] w-[2.5vw] bg-custom-blue">+</button>
              </div>
              <!-- history cards -->
                <div class="flex flex-col w-full">
                <div class="h-[2px] bg-custom-whitegrey w-full my-8"></div>

                  <div class=" w-full flex flex-row justify-between">

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
                      
                  </div>

                  <div class="h-[2px] bg-custom-whitegrey w-full my-8"></div>

                  <!-- card start -->
                  <div class=" w-full flex flex-row justify-between">

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
                  </div> <!-- card end -->
                  
                  <div class="h-[2px] bg-custom-whitegrey w-full my-8"></div>

                  <!-- card start -->
                  <div class=" w-full flex flex-row justify-between">

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
                  </div> <!-- card end -->
                </div>
          </div>
      </div>
    @empty
      <div class="flex min-h-screen items-center justify-evenly">
          <div class="flex flex-col items-center text-xl">
              Riwayat kamu masih kosong :(<br><div><a class="font-bold underline" href="">pendekin link</a> yuk! </div>
          </div>
      </div>
    @endforelse


    <!-- footer -->
    <x-footer></x-footer>

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
