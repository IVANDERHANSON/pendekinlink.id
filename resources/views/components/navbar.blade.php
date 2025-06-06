<div class="fixed left-0 top-0 w-full flex bg-custom-black text-custom-white text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem] whitespace-nowrap">
    <div class="flex w-full h-[5rem] items-center rounded-lg border-3 border-custom-black bg-custom-grey px-2 sm:px-8 py-3">
        <a href="/" class="text-[0.5rem] sm:text-[0.75rem] md:text-[1rem] lg:text-[1.5rem] xl:text-[2rem] font-bold tracking-tight text-custom-white">
          pendekinlink
          <span class="text-[calc(0.375rem/2)] sm:text-[0.375rem] md:text-[0.75rem] lg:text-[1.5rem] xl:text-[3rem] text-custom-blue">.</span>
          id
        </a>
    </div>
    <ul class="flex w-fit h-[5rem] items-center space-x-8 rounded-lg border-3 border-l-0 border-r-0 border-custom-black bg-custom-grey px-2 sm:px-8 py-3 font-medium">
        <li><a href="/" class="hover:text-custom-blue">Pendekin Link</a></li>
        <li>
            <a href="/shorten-in-bulk" class="hover:text-custom-blue">Pendekin Banyak Link</a>
        </li>
        @if (Auth::user())
            <li><a href="/history" class="hover:text-custom-blue">Riwayat</a></li>
        @else
            <li>
                <p class="cursor-default text-custom-lightgrey">Riwayat</p>
            </li>
        @endif
    </ul>
    @if (Auth::user())
        <form method="POST" action="{{ route('logout') }}" id="logoutForm">
            @csrf
        </form>
        <button
            class="flex h-[5rem] box-border items-center rounded-lg border-3 border-custom-black bg-custom-grey px-2 sm:px-8 py-3 font-medium hover:bg-custom-blue"
            id="logout">
            Keluar
        </button>
    @else
        <button
            class="flex h-[5rem] box-border items-center rounded-lg border-3 border-custom-black bg-custom-grey px-2 sm:px-8 py-3 font-medium hover:bg-custom-blue"
            id="login">
            Masuk
        </button>
    @endif
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
