<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penta Store</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <link rel="icon" href="/logo.png" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector("[data-carousel='static']");
            const carouselItems = document.querySelectorAll("[data-carousel-item]");
            const nextButton = document.querySelector("[data-carousel-next]");
            const prevButton = document.querySelector("[data-carousel-prev]");

            let currentSlide = 0;

            const showSlide = (index) => {
                carouselItems.forEach((item) => item.classList.add("hidden"));
                carouselItems[index].classList.remove("hidden");
            };

            const nextSlide = () => {
                currentSlide = (currentSlide + 1) % carouselItems.length;
                showSlide(currentSlide);
            };

            const prevSlide = () => {
                currentSlide = (currentSlide - 1 + carouselItems.length) % carouselItems.length;
                showSlide(currentSlide);
            };

            nextButton.addEventListener("click", nextSlide);
            prevButton.addEventListener("click", prevSlide);

            const intervalId = setInterval(nextSlide, 2000);

            carousel.addEventListener("mouseenter", () => clearInterval(intervalId));

            carousel.addEventListener("mouseleave", () => {
                clearInterval(intervalId);
                intervalId = setInterval(nextSlide, 2000);
            });

            // Tambahkan code untuk menampilkan slide pertama saat halaman dimuat
            showSlide(currentSlide);
        });
    </script>


</head>

<body class="bg-[#141b2b] min-h-screen text-white w-full">
    @include('layouts.nav')
    @include('layouts.carousel')

    <div class="fixed bottom-12 right-12">
        <a href="https://api.whatsapp.com/send?phone=6289502789608" target="_blank" rel="noopener noreferrer"
            class="bg-green-500 text-white p-4 rounded-full flex items-center shadow hover:bg-green-600 transition duration-300">
            <img src="/wa.png" alt="" class="w-6 h-6 object-cover me-2">
            Jual Akun
        </a>
    </div>


    <h1
        class="font-bold
    text-[#8afdf7]
    text-3xl max-w-screen-xl flex flex-wrap items-center gap-2 mx-auto p-4 mt-10">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
            <path fill-rule="evenodd"
                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                clip-rule="evenodd" />
        </svg>
        GAMES POPULER
    </h1>

    <div class="mb-12 max-w-screen-xl grid grid-cols-5 gap-3 items-center justify-between mx-auto p-4">
        <div
            class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transition duration-150">
            <a href="{{route('topup.create', ['id' => 1])}}">
                <img class="rounded-t-lg w-full object-fill h-64" src="/call-of-duty.jpg" alt="" />
            </a>
            <div class="p-5 text-[#141b2b]">
                <a href="{{route('topup.create', ['id' => 1])}}">
                    <h5 class="text-2xl text-center font-bold tracking-tight text-gray-900">Call of Duty
                        Mobile</h5>
                </a>
            </div>
        </div>
        <div
            class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transition duration-150">
            <a href="{{route('topup.create', ['id' => 2])}}">
                <img class="rounded-t-lg w-full object-fill h-64" src="/genshinimpact_tile.jpg" alt="" />
            </a>
            <div class="p-5 text-[#141b2b]">
                <a href="{{route('topup.create', ['id' => 2])}}">
                    <h5 class="text-2xl text-center  font-bold tracking-tight text-gray-900">Genshin
                        Impact</h5>
                </a>
            </div>
        </div>
        <div
            class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transition duration-150">
            <a href="{{route('topup.create', ['id' => 3])}}">
                <img class="rounded-t-lg w-full object-fill h-64" src="/fc_mobile_tile.jpg" alt="" />
            </a>
            <div class="p-5 text-[#141b2b]">
                <a href="{{route('topup.create', ['id' => 3])}}">
                    <h5 class="text-2xl text-center  font-bold tracking-tight text-gray-900">FC Mobile
                    </h5>
                </a>
            </div>
        </div>
        <div
            class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transition duration-150">
            <a href="{{route('topup.create', ['id' => 4])}}">
                <img class="rounded-t-lg w-full object-fill h-64" src="/ragnarok_tile.jpg" alt="" />
            </a>
            <div class="p-5 text-[#141b2b]">
                <a href="{{route('topup.create', ['id' => 4])}}">
                    <h5 class="text-2xl text-center  font-bold tracking-tight text-gray-900">Ragnarok
                    </h5>
                </a>
            </div>
        </div>
        <div
            class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transition duration-150">
                <a href="{{route('topup.create', ['id' => 5])}}">
                <img class="rounded-t-lg w-full object-fill h-64" src="/Clash-of-Clans-Codacash.jpg" alt="" />
            </a>
            <div class="p-5 text-[#141b2b]">
                    <a href="{{route('topup.create', ['id' => 5])}}">
                    <h5 class="text-2xl text-center  font-bold tracking-tight text-gray-900">Clash of
                        Clans</h5>
                </a>
            </div>
        </div>
        <div
            class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transition duration-150">
            <a href="{{route('topup.create', ['id' => 6])}}">
                <img class="rounded-t-lg w-full object-fill h-64" src="/ml.jpg" alt="" />
            </a>
            <div class="p-5 text-[#141b2b]">
                <a href="{{route('topup.create', ['id' => 6])}}">
                    <h5 class="text-2xl text-center  font-bold tracking-tight text-gray-900">Mobile
                        Legend</h5>
                </a>
            </div>
        </div>

        <div
            class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transition duration-150">
            <a href="{{route('topup.create', ['id' => 7])}}">
                <img class="rounded-t-lg w-full object-fill h-64" src="/pubg.jpg" alt="" />
            </a>
            <div class="p-5 text-[#141b2b]">
                <a href="{{route('topup.create', ['id' => 7])}}">
                    <h5 class="text-2xl text-center  font-bold tracking-tight text-gray-900">PUBG</h5>
                </a>
            </div>
        </div>

        <div
            class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transition duration-150">
            <a href="{{route('topup.create', ['id' => 8])}}">
                <img class="rounded-t-lg w-full object-fill h-64" src="/ff.jpg" alt="" />
            </a>
            <div class="p-5 text-[#141b2b]">
                <a href="{{route('topup.create', ['id' => 8])}}">
                    <h5 class="text-2xl text-center  font-bold tracking-tight text-gray-900">Free Fire
                    </h5>
                </a>
            </div>
        </div>

        <div
            class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transition duration-150">
        <a href="{{route('topup.create', ['id' => 9])}}">
                <img class="rounded-t-lg w-full object-fill h-64" src="/chimeraland.png" alt="" />
            </a>
            <div class="p-5 text-[#141b2b]">
                <a href="{{route('topup.create', ['id' => 9])}}">
                    <h5 class="text-2xl text-center  font-bold tracking-tight text-gray-900">Chimera Land
                    </h5>
                </a>
            </div>
        </div>

        <div
        class="w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 transition duration-150">
    <a href="{{route('topup.create', ['id' => 10])}}">
            <img class="rounded-t-lg w-full object-fill h-64" src="/metal.jpg" alt="" />
        </a>
        <div class="p-5 text-[#141b2b]">
            <a href="{{route('topup.create', ['id' => 10])}}">
                <h5 class="text-2xl text-center  font-bold tracking-tight text-gray-900">Metal Slug
                </h5>
            </a>
        </div>
    </div>

    </div>


    <footer class="mt-32 text-[#8afdf7]">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="flex justify-between">
                <div>
                    <a href="" class="flex items-center">
                        <img src="/logo.png" class="h-12 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-4xl font-semibold whitespace-nowrap text-[#8afdf7]">
                            Penta Store</span>
                    </a>
                    <p class="max-w-xl w-full leading-relaxed mt-5 text-justify">
                        PentaStore menjadi destinasi toko top up game dan jual beli akun yang dipilih para gamers untuk
                        melakukan top up dan jual beli akun karena berbagai alasan penting. erdapat berbagai game yang
                        tersedia di PentaStore memungkinkan gamer untuk menemukan dan melakukan top up pada berbagai
                        jenis game.
                    </p>
                </div>
                <div>
                    <div>
                        <h2 class="mb-6 text-lg font-semibold uppercase text-[#8afdf7] flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z"
                                    clip-rule="evenodd" />
                            </svg>

                            Contact Information
                        </h2>
                        <ul class="text-sm">
                            <li class="mb-4">
                                <a href="#" class="hover:underline flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    Jl. Teladan, Kec.Tampan, Riau</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path d="M10.5 18.75a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" />
                                        <path fill-rule="evenodd"
                                            d="M8.625.75A3.375 3.375 0 005.25 4.125v15.75a3.375 3.375 0 003.375 3.375h6.75a3.375 3.375 0 003.375-3.375V4.125A3.375 3.375 0 0015.375.75h-6.75zM7.5 4.125C7.5 3.504 8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 017.5 19.875V4.125z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    +62823456789</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path
                                            d="M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                                        <path
                                            d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                                    </svg>
                                    admin@pentastore.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

            <span class="block text-center text-sm text-[#8afdf7]">© 2021 Penta Store. All rights reserved.</span>
        </div>
    </footer>

</body>

</html>
