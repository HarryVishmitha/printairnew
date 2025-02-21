<x-head :title="'Register'"/>
<x-guest-layout>
<!-- @vite('resources/js/scripts.js') -->
    <!-- Session Status (if any) -->

    <!-- Custom Login Form -->
    <div class="flex flex-wrap w-full">
        <div class="flex flex-col w-full md:w-1/2">
            <div class="flex flex-col justify-center px-8 pt-8 my-auto md:justify-center md:pt-0 md:px-24 lg:px-32">
                <p class="text-3xl text-center justify-center">
                    <a href="{{ route('home') }}" class="flex w-full justify-center mb-3">
                        <img src="/images/favicon.png" alt="Logo" width="20%">
                    </a>
                    <span class="font-extrabold">Welcome Back!</span>
                </p>
                <form method="POST" action="{{ route('register') }}" class="flex flex-col pt-3 md:pt-8">
                    @csrf

                    <!-- Email Address -->
                    <div class="flex flex-col pt-4">
                        <label for="name" class="block text-sm font-medium text-gray-700" :value="__('Name')">Full Name</label>
                        <input id="name" type="text" name="name" :value="old('name')" required autofocus
                               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="flex flex-col pt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus
                               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col pt-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" type="password" name="password" required
                               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col pt-4 mb-9">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700" :value="__('Confirm Password')">Confirm password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required
                               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- show passwords -->
                    <div class="flex items-center mb-4">
                        <input id="passwordshow" type="checkbox" name="passwordshow" class="mr-2" />
                        <label for="passwordshow" class="text-sm text-gray-600">Show Passwords</label>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-between">
                        <button type="submit"
                                class="w-full bg-black text-white py-2 rounded-md shadow-md hover:bg-white hover:text-black focus:outline-none focus:ring-2">
                            Register
                        </button>
                    </div>


                </form>

                <!-- Register Link -->
                <div class="pt-6 pb-12 text-center">
                    <p>Already our customer? <a href="{{ route('login') }}">Log-in</a></p>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="hidden object-cover w-full h-screen md:block" id="randomImage" />
            <div class="absolute bottom-0 right-0 p-4 text-gray-200 bg-opacity-50 text-shadow-glow">
                Images from <a href="https://unsplash.com/" class="underline">unsplash.com</a>
                <span>Thank you photograpers</span>
            </div>
        </div>
    </div>
    <script>
        const password = document.getElementById('password');
        const password_confirmation = document.getElementById('password_confirmation');
        const passwordshow = document.getElementById('passwordshow');
        passwordshow.addEventListener('change', function () {
            if (password.type === 'password') {
                password.type = 'text';
                password_confirmation.type = 'text';
            } else {
                password.type = 'password';
                password_confirmation.type = 'password';
            }
        });
    </script>
</x-guest-layout>
