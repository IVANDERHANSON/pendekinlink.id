<div class="absolute w-full bg-custom-black text-custom-white">
    <div class="flex">
      <div
        class="flex w-full items-center rounded-lg border-3 border-custom-black bg-custom-grey px-8 py-3"
      >
      <a href="/" class="text-2xl font-bold tracking-tight text-custom-white"
      >pendekinlink<span class="text-3xl text-custom-blue">.</span>id</a
        >
      </div>
      <ul
        class="flex w-fit items-center space-x-8 rounded-lg border-3 border-l-0 border-r-0 border-custom-black bg-custom-grey px-8 py-3 font-medium min-[909px]:whitespace-nowrap"
      >
        <li><a href="/" class="hover:text-custom-blue">Pendekin link</a></li>
        <li>
          <a href="/shorten-in-bulk" class="hover:text-custom-blue">Pendekin banyak link</a>
        </li>
        @if (Auth::user())
          <li><a href="/history" class="hover:text-custom-blue">Riwayat</a></li>
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