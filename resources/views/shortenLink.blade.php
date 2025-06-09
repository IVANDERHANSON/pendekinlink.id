<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pendekinlink.id</title>
    <link rel="shortcut icon" href="assets/Logo.jpeg" type="image/x-icon">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <x-navbar></x-navbar>

    @if (session('success'))
        <div class="w-[80%] min-h-[80vh] mx-[10%] my-[10vh] flex justify-center items-center text-size1">
            <div class="h-fit mt-12 flex justify-center items-start flex-col">
                <p class="w-fit mb-3.5"><span class="font-bold">Link</span> kamu <span class="font-bold">berhasil
                        dikustom</span>!</p>
                <a class="font-bold underline text-custom-blue text-shadow3 hover:opacity-80"
                    href="{{ session('success') }}" target="_blank">{{ session('success') }}</a>
                <button class="mt-7 button1 shadow-custom1 h-14 w-full" id="back">
                    Balik pendekin link!
                </button>
            </div>
        </div>
    @else
        <div class="flex w-[80%] min-h-[80vh] items-center justify-center mx-[10%] my-[10vh]">
            <div class="mt-12 h-fit">
                <div class="text-shadow1 pb-14 font-semibold text-size3">
                    <p class="text-custom-blue">
                        Pendekin<span class="text-custom-grey"> & </span>kustom link
                    </p>
                    <p>jadi <span class="text-custom-blue">mudah</span>!</p>
                </div>
                <form action="/store" method="POST">
                    @csrf
                    
                    @if (session('randomLink'))
                        <input class="input1 shadow-custom1 w-full text-size1" placeholder="Link awal"
                            name="Source" value="{{ session('oldSource') }}" id="Source1" />
                    @else
                        <input class="input1 shadow-custom1 w-full text-size1" placeholder="Link awal"
                            name="Source" value="{{ old('Source') }}" id="Source1" />
                    @endif
                    @error('Source')
                        <p class="font-semibold text-red-600 pl-5 text-size1">
                            {{ $message }}
                        </p>
                    @enderror
                    
                    <div class="flex items-center justify-between gap-4 pt-7">
                        <p class="font-bold text-size1">pendekinlink.id/</p>
                        <div class="w-full">
                            @if (session('randomLink'))
                                <input class="input1 shadow-custom1 w-full text-size1" placeholder="Link kustom"
                                    name="Link" value="{{ session('randomLink') }}" />
                            @else
                                <input class="input1 shadow-custom1 w-full text-size1" placeholder="Link kustom"
                                    name="Link" value="{{ old('Link') }}" />
                            @endif
                            @error('Link')
                                <p class="font-semibold text-red-600 pl-5 text-size1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <button id="dropdownButton"
                            class="h-14 px-[15px] shadow-custom1 rounded-full border-3 bg-custom-grey  border-custom-black text-custom-white hover:bg-opacity-85 hover:border-custom-grey"
                            type="button" title="Generate random link"
                        >
                            <i data-feather="refresh-cw" class="text-custom-white h-full w-5"></i>
                        </button>
                    </div>


                    <div class="pt-14">
                        <button class="button1 shadow-custom1 h-14 w-full text-size1" type="submit">
                            Pendekin link!
                        </button>
                    </div>
                </form>
                <form action="/generate-random-link" method="POST" id="generateRandomLinkForm">
                    @csrf
                    <input type="text" name="Source2" id="Source2" class="hidden">
                </form>
                <div class="w-full pt-14 text-center text-size1">
                    <a href="#" class="font-bold underline hover:text-custom-lightgrey">Terms of Service</a>
                </div>
            </div>
        </div>
    @endif

    <x-footer></x-footer>

    @if (session('success'))
        <script>
            document.getElementById('back').addEventListener('click', function() {
                window.location.href = '/';
            });
        </script>
    @else
        <script>
            feather.replace()

            document.getElementById('dropdownButton').addEventListener('click', function() {
                document.getElementById('Source2').value = document.getElementById('Source1').value
                document.getElementById('generateRandomLinkForm').submit();
            });
        </script>
    @endif
</body>

</html>
