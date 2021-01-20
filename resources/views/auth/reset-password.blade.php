<x-guest-layout title="Reset Password">
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                        src="{{ asset('img/forgot-password-office.jpeg') }}" alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                        src="{{ asset('img/forgot-password-office-dark.jpeg') }}" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token"
                                value="{{ $request->route('token') }}">

                            <div class="block">
                                <x-label value="Email" />
                                <x-input class="block w-full mt-1" type="email" name="email"
                                    :value="old('email', $request->email)" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label value="Password" />
                                <x-input class="block w-full mt-1" type="password" name="password" required
                                    autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-label value="Confirm Password" />
                                <x-input class="block w-full mt-1" type="password" name="password_confirmation" required
                                    autocomplete="new-password" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button>
                                    {{ __('Reset Password') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
