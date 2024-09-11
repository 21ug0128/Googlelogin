<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white p-10 rounded-xl shadow-xl border border-gray-200">
            <h2 class="text-4xl font-bold mb-8 text-gray-800 text-center">Login</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-6">
                    <x-input-label for="email" :value="__('Email')" class="text-sm font-semibold text-gray-700" />
                    <x-text-input id="email" class="block mt-2 w-full px-4 py-3 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                                  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <x-input-label for="password" :value="__('Password')" class="text-sm font-semibold text-gray-700" />
                    <x-text-input id="password" class="block mt-2 w-full px-4 py-3 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                                  type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-6">
                    <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                    <label for="remember_me" class="ml-2 text-sm font-medium text-gray-600">{{ __('Remember me') }}</label>
                </div>

                <div class="flex items-center justify-between mb-6">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:text-blue-800 font-medium" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow-lg hover:bg-blue-700 hover:shadow-xl transition-all">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                <!-- Google Login -->
                <div class="mt-8 flex flex-col items-center">
                    <span class="text-gray-700 font-medium mb-4">Or sign in with</span>
                    <a href="{{ url('auth/google') }}" class="w-full flex justify-center">
                        <img src="https://storage.googleapis.com/pruvit-968.appspot.com/react-google-button/preview.png" 
                             alt="Sign in with Google" class="w-64 cursor-pointer rounded-lg border border-gray-300 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg" />
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Custom Styles -->
    <style>
        /* Override styles */
        .rounded-xl {
            border-radius: 1rem;
        }

        .shadow-xl {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .hover\:shadow-xl:hover {
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .hover\:scale-105:hover {
            transform: scale(1.05);
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .min-h-screen {
            min-height: calc(100vh - 4rem);
        }

        .hover\:bg-blue-700:hover {
            background-color: #2563eb;
        }

        .hover\:text-blue-800:hover {
            color: #1e40af;
        }
    </style>
</x-guest-layout>
