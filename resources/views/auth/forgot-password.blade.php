<x-head :title="'Forgot Password'"/>
<x-guest-layout>
    <div class="flex items-center justify-center bg-gray-100 w-full h-screen">
        <main id="content" role="main" class="w-full max-w-md p-6">
            <div class="bg-white rounded-xl shadow-lg border-indigo-300">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <a href="{{ route('home') }}" class="flex w-full justify-center mb-3">
                            <img src="/images/favicon.png" alt="Logo" width="20%">
                        </a>
                        <h1 class="block text-2xl font-bold text-gray-800">Forgot password?</h1>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            Remember your password?
                            <a class="text-blue-600 decoration-2 hover:underline font-medium" href="#">
                                Login here
                            </a>
                        </p>
                        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                            OR
                        </div>
                        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>
                    </div>

                    <div class="mt-5">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="flex flex-col pt-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input id="email" type="email" name="email" :value="old('email')" required autofocus
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Email Password Reset Link') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-guest-layout>
