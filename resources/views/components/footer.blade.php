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
      <form action="/store-contact-us" method="POST">
        @csrf
        <p
          class="text-shadow2 text-3xl font-semibold min-[1613px]:whitespace-nowrap"
        >
          Ada <span class="text-custom-blue">masalah</span> atau pengen
          <span class="text-custom-blue">tanya²</span>?
        </p>
        <input
          class="input2 mt-7 w-full shadow-custom2"
          placeholder="masukin email kamu"
          type="email"
          name="Email"
          value="{{ old('Email') }}"
        />
        @error('Email')
          <p class="font-semibold text-red-600 pl-5">
              {{ $message }}
          </p>
        @enderror
        
        <textarea
          class="input2 mt-7 h-40 w-full shadow-custom2"
          placeholder="masukin pesan kamu"
          name="Message"
        >{{ old('Message') }}</textarea>
        @error('Message')
          <p class="font-semibold text-red-600 pl-5">
              {{ $message }}
          </p>
        @enderror

        <button class="button2 shadow-custom2 h-20 w-full mt-5 " type="submit">
              Kirim pesan!
          </button>
      </form>
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

  @if (session('contactUs'))
    <script>
      alert("{{ session('contactUs') }}");
    </script>
  @endif