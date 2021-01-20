<x-guest-layout title="Two-factor authentication">
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
                        <div x-data="{ recovery: false }">
                            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                            </div>

                            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                            </div>

                            <x-validation-errors class="mb-4" />

                            <form method="POST" action="/two-factor-challenge">
                                @csrf

                                <div class="mt-4" x-show="! recovery">
                                    <x-label value="Code" />
                                    <x-input class="block w-full mt-1" type="text" name="code" autofocus x-ref="code"
                                        autocomplete="one-time-code" />
                                </div>

                                <div class="mt-4" x-show="recovery">
                                    <x-label value="Recovery Code" />
                                    <x-input class="block w-full mt-1" type="text" name="recovery_code"
                                        x-ref="recovery_code" autocomplete="one-time-code" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <button type="button"
                                        class="text-sm text-gray-600 underline cursor-pointer hover:text-gray-900"
                                        x-show="! recovery" x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                                        {{ __('Use a recovery code') }}
                                    </button>

                                    <button type="button"
                                        class="text-sm text-gray-600 underline cursor-pointer hover:text-gray-900"
                                        x-show="recovery" x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                                        {{ __('Use an authentication code') }}
                                    </button>

                                    <x-button class="ml-4">
                                        {{ __('Login') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
