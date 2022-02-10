<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .object-fit-fill {
            object-fit: fill;
        }

        .object-fit-contain {
            object-fit: contain;
        }

        .object-fit-cover {
            object-fit: cover;
        }

        .object-fit-none {
            object-fit: none;
        }

        .object-fit-scale-down {
            object-fit: scale-down;
        }

    </style>
</head>

<body>
    <nav class="bg-transparent lg:mx-20 absolute z-30 left-0 top-0 right-0 text-white">
        <div class=" mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="#" class="flex items-center py-4 px-2">
                            <img src="{{ asset('img/Logo.svg') }}" alt="Logo" class="h-16 w-36 mr-2">
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="" class="py-4 px-2 text-base ">Services</a>
                        <a href="" class="py-4 px-2 transition text-base duration-300">Invertors Room</a>
                        <a href="" class="py-4 px-2 transition duration-300 text-base">Pricing</a>
                        <a href="" class="py-4 px-2 transition duration-300 text-base">Careers</a>
                        <a href="" class="py-4 px-2 transition duration-300 text-base">Contact</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                    <a href="" class="py-2 px-6 bg-white font-medium text-black rounded transition duration-300">T360
                        DaaS</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 " x-show="!showMenu" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu bg-white text-gray-500 transition-all duration-300">
            <ul class="">
                <li class="active"><a href="index.html"
                        class="block text-sm px-2 py-4 transition duration-300">Services</a></li>
                <li><a href="#services"
                        class="block text-sm px-2 py-4 transition duration-300">Invertors Room</a>
                </li>
                <li><a href="#about"
                        class="block text-sm px-2 py-4 transition duration-300">Pricing</a></li>
                <li><a href="#contact"
                        class="block text-sm px-2 py-4 transition duration-300">Careers</a></li>
                <li><a href="#contact"
                        class="block text-sm px-2 py-4 transition duration-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="relative py-24 px-4">
        <div class="relative text-white container mx-auto mt-12 lg:mt-60 z-20 lg:w-1/3 md:w-2/3 text-center">
            <h1 class="mb-4 text-5xl font-bold">Delivering Purpose Driven Data</h1>
            <p class="leading-normal my-12 lg:my-24">Transaction 360&deg; (T360&deg;) is bringing to the market a revolutionary
                approach to address major industry data issues.</p>
            <div class="mb-12">
                <a href="#"
                    class="inline-block px-10 mx-4 bg-white text-black no-underline hover:bg-gray-800 hover:text-white mt-4 p-4 rounded">Get
                    Started</a>
                <a href="#"
                    class="inline-block px-10 mx-4 bg-transparent border text-white no-underline hover:bg-blue-800 mt-4 p-4 rounded">Learn
                    More</a>
            </div>
        </div>
        <div class="absolute inset-0 h-auto z-10">
            <img src="{{ asset('img/header-background.png') }}" alt="" class="h-full w-full object-fit-cover">
        </div>
    </section>

    <footer
        style="background-color: #131313; background-image:url('{{ asset('img/footer-background.png') }}'); background-repeat:no-repeat;"
        class="pt-24 pb-24 lg:pb-48 m">
        <div class="grid grid-flow-row-dense grid-cols-1 md:grid-cols-2 text-gray-200 text-base w-4/5 m-auto">
            <div class="">
                <img src="{{ asset('img/logo.svg') }}" alt="">
            </div>
            <div class="grid grid-flow-row-dense grid-cols-2 grid-rows-2 md:grid-cols-3 md:grid-rows-1 mt-12 md:mt-0">
                <ul>
                    <li>
                        <h3 class="text-xl text-gray-100 pb-4 lg:pb-8 p-0.5">Product</h3>
                    </li>
                    <li class="p-0.5"><a href="#">Overview</a></li>
                    <li class="p-0.5"><a href="#">Features</a></li>
                </ul>
                <ul>
                    <li>
                        <h3 class="text-xl text-gray-100 pb-4 lg:pb-8 p-0.5">Company</h3>
                    </li>
                    <li class="p-0.5"><a href="#">About</a></li>
                    <li class="p-0.5"><a href="#">Careers</a></li>
                    <li class="p-0.5"><a href="#">Contact</a></li>
                </ul>
                <ul>
                    <li>
                        <h3 class="text-xl text-gray-100 pb-4 lg:pb-8 p-0.5">Support</h3>
                    </li>
                    <li class="p-0.5"><a href="#">Help Center</a></li>
                    <li class="p-0.5"><a href="#">Terms of service</a></li>
                    <li class="p-0.5"><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="bg-black py-4">
        <div class="md:flex md:justify-between block mx-auto w-4/5 text-gray-300">
            <p class="block py-4 md:py-0">&copy; 2021 T360 Inc: All rights reserved</p>
            <div class="grid grid-flow-row-dense grid-cols-4 gap-0 md:gap-3">
                <img src="{{ asset('img/instagram.svg') }}" alt="">
                <img src="{{ asset('img/ball.svg') }}" alt="">
                <img src="{{ asset('img/twitter.svg') }}" alt="">
                <img src="{{ asset('img/youtube.svg') }}" alt="">
            </div>
        </div>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>

</html>
