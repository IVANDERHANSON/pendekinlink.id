<div class="fixed left-0 top-0 w-full flex bg-custom-black text-custom-white text-size1 whitespace-nowrap">
    <div class="flex w-full h-[10vh] items-center rounded-lg border-3 border-custom-black bg-custom-grey px-2 sm:px-8 py-3">
        <a href="/" class="text-size2 font-bold tracking-tight text-custom-white">
          pendekinlink
          <span class="text-[0.5rem] sm:text-[1rem] md:text-[1.5rem] lg:text-[2.5rem] xl:text-[3rem] text-custom-blue">.</span>
          id
        </a>
    </div>
    <ul class="flex w-fit h-[10vh] items-center space-x-8 rounded-lg border-3 border-l-0 border-r-0 border-custom-black bg-custom-grey px-2 sm:px-8 py-3 font-medium">
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
            class="flex h-[10vh] box-border items-center rounded-lg border-3 border-custom-black bg-custom-grey px-2 sm:px-8 py-3 font-medium hover:bg-custom-blue"
            id="logout">
            Logout
        </button>

        <script>
            document.getElementById('logout').addEventListener('click', function() {
                document.getElementById('logoutForm').submit();
            });
        </script>
    @else
        <button
            class="flex h-[10vh] box-border items-center rounded-lg border-3 border-custom-black bg-custom-grey px-2 sm:px-8 py-3 font-medium hover:bg-custom-blue"
            id="login">
            Login
        </button>

        <script>
            const login = document.getElementById('login');
            login.addEventListener('click', function() {
                window.location.href = '{{ route('login') }}';
            });
        </script>
    @endif
</div>
