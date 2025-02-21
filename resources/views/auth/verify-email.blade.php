<x-head :title="'Confirm your Email Address'"/>
<x-guest-layout>
    <x-alert-message
        msgtype="success"
        msgtitle="Verify Your Email Address"
    >
    Thanks for signing up! We've sent you a email. If you didn't receive the email, we will gladly send you another.
    </x-alert-message>
    <div class="flex items-center justify-center bg-gray-100 w-full h-screen">
        <main id="content" role="main" class="w-full max-w-md p-6">
            <div class="bg-white rounded-xl shadow-lg border-indigo-300">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <a href="{{ route('home') }}" class="flex w-full justify-center mb-3">
                            <img src="/images/favicon.png" alt="Logo" width="20%">
                        </a>
                        <h1 class="block text-2xl font-bold text-gray-800">Verify Your Email Address</h1>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                        </p>
                        @if (session('status') == 'verification-link-sent')
                            <div class="mt-4 font-medium text-sm text-green-600">
                                A new verification link has been sent to the email address you provided during registration.
                            </div>
                        @endif
                        <div class="mt-4 flex items-center justify-between">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <div>
                                    <x-primary-button>
                                        {{ __('Resend Verification Email') }}
                                    </x-primary-button>
                                </div>
                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
</x-guest-layout>
