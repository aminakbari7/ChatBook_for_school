

<x-guest-layout>
    <style>

        *{
            font-family:Arabic Typesetting, serif !important;
            font-size: 21px ! important;
            background-color: #c2cfd4 !important;
        }
    </style>
    <x-authentication-card >
        <x-slot name="logo">
            <img src="images/logo.jpeg" style="border-radius: 50px;width:80%;">
            <b style="display:center;color:rgb(97, 97, 205)">فرم ورود به وبسایت</b>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" >
            @csrf

            <div>
                <x-label for="email" style="direction:rtl;color:#002244" value="{{ __('ایمیل') }}" />
                <x-input style=" background-color:rgb(236, 218, 218) !important" dir="rtl" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" style="direction:rtl;color:#002244;" value="{{ __('پسورد') }}" />
                <x-input style=" background-color:rgb(236, 218, 218) !important" dir="rtl" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center" style="direction:rtl ;color:rgb(250, 245, 249);">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('مرا به خاطر بسپار') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4" >
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('آیا پسورد خود را فراموش کرده اید؟') }}
                    </a>
                @endif

                <x-button class="ml-4" style="color: rgb(228, 245, 0); background-color:rgb(6, 59, 1) !important">
                    {{ __('ورود') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
