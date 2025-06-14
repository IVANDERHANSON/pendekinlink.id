<div class="flex flex-col-reverse md:flex-row bg-custom-black text-custom-white">
    <div class="w-full rounded-lg border-3 border-t-0 md:border-t-3 border-custom-black bg-custom-grey px-12 md:px-24 py-12">
        <p class="text-shadow2 font-semibold text-size2">
            Sekilas tentang <span class="text-custom-blue">pendekinlink.id</span>
        </p>
        <p class="mt-7 font-normal text-size1">
            pendekinlink.id menawarkan fitur kustomisasi link yang mudah digunakan dan
            gratis. Solusi praktis ini sangat bermanfaat bagi pelaku bisnis, pemasar digital, dan pengguna internet umum
            yang ingin menyederhanakan link untuk promosi, berbagi informasi, atau merapikan tampilan link dengan
            efisien.
        </p>
        <p class="mt-12 text-center md:text-left text-size1">
          © 2025 Ivander Hanson Setyawan, All rights reserved.
        </p>
    </div>

    <div class="flex justify-center items-center w-full md:w-fit rounded-lg border-3 border-x-3 md:border-x-0 border-custom-black bg-custom-grey px-12 md:px-24 py-12">
        <form action="/store-contact-us" method="POST" class="w-full">
            @csrf
            <p class="text-shadow2 font-semibold text-size2">
                Ada <span class="text-custom-blue">masalah</span> atau pengen
                <span class="text-custom-blue">tanya²</span>?
            </p>
            <input class="input2 mt-7 w-full shadow-custom2 text-size1" placeholder="Email" type="email" name="Email"
                value="{{ old('Email') }}" />

            <textarea class="input2 mt-7 h-20 w-full shadow-custom2 text-size1" placeholder="Pesan" name="Message">{{ old('Message') }}</textarea>

            <button class="button2 shadow-custom2 h-12 w-full mt-5 text-size1" type="submit">
                Kirim pesan!
            </button>
        </form>
    </div>
</div>

@if (session('contactUs'))
    <script>
        alert("{{ session('contactUs') }}");
    </script>
@endif

@if($errors->has('Email') || $errors->has('Message'))
    <script>
      alert("Email dan Pesan harus diisi!");
    </script>
@endif
