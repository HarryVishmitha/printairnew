<x-head :title="'Home'"/>

<header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center px-3 pb-4">
        <!-- RIght Side -->
        <a href="{{ route('home') }}">
            <div class="flex items-center space-x-2">
                <img src="/images/favicon.png" alt="Logo" class="w-10 h-10">
                <span class="font-bold text-[27px]">Printair</span>
            </div>
        </a>

        <!-- Left Side -->
        <div class="flex items-center space-x-5">
            <a href="#" class="text-gray-400 hover:text-[#f44032] text-[17px] ">
                <i class="fa-solid fa-file-pen"></i> Ask For Quote
            </a>
            <a href="#" class="text-gray-400 hover:text-[#f44032] text-[17px] relative text-md">
                <span class="absolute w-5 h-5 text-center align-middle p-1 text-xs bg-red-500 rounded-full -right-3 -top-3.5 text-white leading">5</span>
                <i class="fa-solid fa-cart-shopping"></i> Cart
            </a>
            <a href="{{ route('user.dashboard') }}" class="text-gray-400 hover:text-[#f44032] text-[17px]">
                <i class="fas fa-user"></i> Login
            </a>
        </div>
    </div>
    <hr>
    <div class="container mx-auto flex justify-center items-center px-6 pt-3">
        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-6 text-sm">
            <a href="#" class="text-gray-400 hover:text-[#f44032]">All Products</a>
            <a href="#" class="text-gray-400 hover:text-[#f44032]">Business Stationery</a>
            <a href="#" class="text-gray-400 hover:text-[#f44032]">Marketing Materials</a>
            <a href="#" class="text-gray-400 hover:text-[#f44032]">Large Format</a>
            <a href="#" class="text-gray-400 hover:text-[#f44032]">Promotional</a>
            <a href="#" class="text-gray-400 hover:text-[#f44032]">Photo Products</a>
            <a href="#" class="text-gray-400 hover:text-[#f44032]">Labels & Stickers</a>
            <a href="#" class="text-gray-400 hover:text-[#f44032]">Booklet & Copies</a>
        </div>
    </div>
</header>
<x-footer/>
