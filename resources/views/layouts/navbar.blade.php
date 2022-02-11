<nav class="bg-transparent lg:mx-20 absolute z-30 left-0 top-0 right-0 text-white">
    <div class=" mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <a href="#" class="flex items-center py-4 px-2">
                        <img src="{{ asset('img/Logo.svg') }}" alt="Logo" class="h-16 w-36 mr-2">
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="" class="py-4 px-2 text-base ">Services</a>
                    <a href="" class="py-4 px-2 transition text-base duration-300">Investors Room</a>
                    <a href="" class="py-4 px-2 transition duration-300 text-base">Pricing</a>
                    <a href="" class="py-4 px-2 transition duration-300 text-base">Careers</a>
                    <a href="" class="py-4 px-2 transition duration-300 text-base">Contact</a>
                </div>
            </div>
            <div class="hidden md:flex items-center space-x-3 ">
                <a href="" class="py-2 px-6 bg-white font-medium text-black rounded transition duration-300">T360
                    DaaS</a>
            </div>
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
    <div class="hidden mobile-menu bg-white text-gray-500 transition-all duration-300">
        <ul class="">
            <li class="active"><a href=""
                                  class="block text-sm px-2 py-4 transition duration-300">Services</a></li>
            <li><a href="#services"
                   class="block text-sm px-2 py-4 transition duration-300">Investors Room</a>
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
