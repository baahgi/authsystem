


<x-guest-layout>

    <div class="flex max-w-2xl mx-auto mt-8">
        <div class="flex justify-center space-x-4">
            <div class="flex-1">
                <h2 class="font-bold ">Log in to your BnB Continental Account</h2>
                <div>
                    <div class="flex justify-center mx-auto mt-6">
                        <a href="/" >
                            <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                        </a>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />


                    <form method="POST" action="{{ route('login') }}" class="mt-6">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" class="font-bold" />

                            <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" class="font-bold" />

                            <x-input id="password" class="block w-full mt-1"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>


                        <div class="flex justify-end mt-2">
                            @if (Route::has('password.request'))
                            <a class="text-sm font-bold text-pink-600 underline hover:text-pink-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        </div>
                        <div class="flex items-center justify-end mt-4">

                            <x-button class="w-full ml-3 text-center">
                                {{ __('Log in') }}
                            </x-button>
                        </div>

                        <div class="mt-4">
                            <div class="flex items-center justify-center space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                  </svg>

                                <span class="text-xs">or log in with</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                  </svg>
                            </div>

                            <div class="flex justify-center mt-4 space-x-2 space-x-4">
                                <i class="fab fa-facebook-square"></i>
                                <i class="fab fa-google"></i>
                            </div>

                            <div class="flex justify-center">

                                <div class="mt-4 text-xs font-medium">
                                    <p>Do not have account? <span class="text-pink-600">Create one</span></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div>
                <div class="flex-1 h-full overflow-hidden transform -skew-x-6 bg-pink-600">
                    <div class="p-6">
                        <a href="{{ route('login')}}" class="text-lg font-bold text-center">login</a>

                        <img src="{{asset('images/secure.svg')}}" class="mt-16" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>




