<x-guest-layout >
    <style>

        *{
            font-family:Arabic Typesetting, serif !important;
            font-size: 16px ! important;
            background-color: #c2cfd4 !important;
        }
    </style>
    <x-authentication-card  >
        <x-slot name="logo">
        <b style="display:center;color:rgb(97, 97, 205);font-size:25px ! important">فرم ثبت نام در وبسایت</b>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" style="direction:rtl;color:#002244;" value="{{ __('نام و نام خانوادگی') }}" />
                <x-input style=" background-color:rgb(236, 218, 218) !important"  dir="rtl" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-label for="email" style="direction:rtl;color:#002244" value="{{ __('ایمیل') }}" />
                <x-input style=" background-color:rgb(236, 218, 218) !important"  dir="rtl" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="phone" style="direction:rtl;color:#002244;" value="{{ __('شماره تماس') }}" />
                <x-input style=" background-color:rgb(236, 218, 218) !important"  dir="rtl" id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password"  style="direction:rtl;color:#002244;"  value="{{ __('پسورد') }}" />
                <x-input style=" background-color:rgb(236, 218, 218) !important"   dir="rtl" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" style="direction:rtl;color:#002244;"  value="{{ __('تکرار پسورد') }}" />
                <x-input style=" background-color:rgb(236, 218, 218) !important"   dir="rtl" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('قبلا ثبت نام کرده اید؟') }}
                </a>

                <x-button class="ml-4" style="color: rgb(228, 245, 0); background-color:rgb(6, 59, 1) !important">
                    {{ __('ثبت نام') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
