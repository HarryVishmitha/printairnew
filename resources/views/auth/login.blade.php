<x-guest-layout>
    <!-- Session Status (if any) -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-alert-message msgtype="success" msgtitle="Success!">
        Congratulations, you are the best player.
    </x-alert-message>
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
                <form method="POST" action="{{ route('login') }}" class="flex flex-col pt-3 md:pt-8">
                    @csrf

                    <!-- Email Address -->
                    <div class="flex flex-col pt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus
                               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col pt-4 mb-12">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" type="password" name="password" required
                               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center mb-4">
                        <input id="remember_me" type="checkbox" name="remember" class="mr-2" />
                        <label for="remember_me" class="text-sm text-gray-600">Remember me</label>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-between mb-4">
                        <button type="submit"
                                class="w-full bg-black text-white py-2 rounded-md shadow-md hover:bg-white hover:text-black focus:outline-none focus:ring-2">
                            Submit
                        </button>
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="text-center">
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-500">Forgot your password?</a>
                    </div>
                </form>

                <!-- Register Link -->
                <div class="pt-12 pb-12 text-center">
                    <p>Currently, you can't register on us but if you're our old customer you can login.</p>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="hidden object-cover w-full h-screen md:block" src="/images/object/9.jpg" />
        </div>
    </div>
</x-guest-layout>

