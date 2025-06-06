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
        <div class="w-[80%] min-h-[80vh] mx-[10%] my-[10vh] flex justify-center items-center flex-col">
            <p class="w-fit mb-3.5 text-[0.25rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1.25rem] xl:text-[1.75rem]"><span class="font-bold">Link</span> kamu <span class="font-bold">berhasil
                    dikustom</span>!</p>
            <a class="font-bold underline text-custom-blue text-shadow3 hover:opacity-80 text-[0.5rem] sm:text-[0.75rem] md:text-[1rem] lg:text-[1.5rem] xl:text-[2rem]"
                href="{{ session('success') }}" target="_blank">{{ session('success') }}</a>
            <div>
                <button class="mt-7 button1 shadow-custom1 h-14 w-full text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem]" id="back">
                    Balik pendekin link!
                </button>
            </div>
        </div>
    @else
        <div class="flex w-[80%] min-h-[80vh] items-center justify-evenly mx-[10%] my-[10vh]">
            <div class="mt-12 h-fit flex-row justify-center">
                <div class="text-shadow1 pb-14 font-semibold text-[1.5rem] leading-[1.5rem] sm:text-[1.75rem] sm:leading-[1.75rem] md:text-[2rem] md:leading-[2rem] lg:text-[2.5rem] lg:leading-[2.5rem] xl:text-[3rem] xl:leading-[3rem]">
                    <p class="text-custom-blue">
                        Pendekin<span class="text-custom-grey"> & </span>kustom link
                    </p>
                    <p>jadi <span class="text-custom-blue">mudah</span>!</p>
                </div>
                <form action="/store" method="POST">
                    @csrf
                    <div class="flex-col">
                        @if (session('randomLink'))
                        <input class="input1 shadow-custom1 w-full text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem]" placeholder="Link awal"
                            name="Source" value="{{ session('oldSource') }}" id="Source1" />
                        @else
                        <input class="input1 shadow-custom1 w-full text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem]" placeholder="Link awal"
                            name="Source" value="{{ old('Source') }}" id="Source1" />
                        @endif
                        @error('Source')
                            <p class="font-semibold text-red-600 pl-5 text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem]">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="flex items-start justify-between gap-4 pt-7">
                        <p class="font-bold pt-3.5 text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem]">pendekinlink.id/</p>
                        <div class="w-full">
                            @if (session('randomLink'))
                                <input class="input1 shadow-custom1 w-full text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem]" placeholder="Link kustom"
                                    name="Link" value="{{ session('randomLink') }}" />
                            @else
                                <input class="input1 shadow-custom1 w-full text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem]" placeholder="Link kustom"
                                    name="Link" value="{{ old('Link') }}" />
                            @endif
                            @error('Link')
                                <p class="font-semibold text-red-600 pl-5 text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem]">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <button id="dropdownButton"
                            class="h-14 px-[15px]  shadow-custom1 rounded-full border-3 bg-custom-grey  border-custom-black text-custom-white hover:bg-opacity-85 hover:border-custom-grey"
                            type="button" title="Generate random link"><i data-feather="refresh-cw"
                                class="text-custom-white h-full w-5"></i></button>
                    </div>


                    <div class="flex pt-14">
                        <button class="button1 shadow-custom1 h-14 w-full text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem]" type="submit">
                            Pendekin link!
                        </button>
                    </div>
                </form>
                <form action="/generate-random-link" method="POST" id="generateRandomLinkForm">
                    @csrf
                    <input type="text" name="Source2" id="Source2" class="hidden">
                </form>
                <div class="w-full pt-14 text-center text-[0.3rem] sm:text-[0.5rem] md:text-[0.75rem] lg:text-[1rem] xl:text-[1.2rem]">
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
