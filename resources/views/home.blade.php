<x-head :title="'Home'"/>

<header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center px-6 pb-4">
        <!-- RIght Side -->
        <a href="{{ route('home') }}">
            <div class="flex items-center space-x-2">
                <img src="/images/favicon.png" alt="Logo" class="w-10 h-10">
                <span class="font-bold text-[27px]">Printair</span>
            </div>
        </a>

        <!-- Left Side -->
        <div class="flex items-center space-x-5">
            <a href="#" class="text-gray-600 hover:text-blue-600 text-[17px]">
                <i class="fa-solid fa-file-pen"></i> Ask For Quote
            </a>
            <a href="#" class="text-gray-600 hover:text-blue-600 text-[17px]">
                <i class="fa-solid fa-cart-shopping"></i> Cart
            </a>
            <a href="#" class="text-gray-600 hover:text-blue-600 text-[17px]">
                <i class="fas fa-user"></i> Login
            </a>
        </div>
    </div>
    <hr>
    <div class="container">
        hi
    </div>
</header>
