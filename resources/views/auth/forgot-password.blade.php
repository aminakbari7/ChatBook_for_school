<x-guest-layout>
    <x-authentication-card>
        <style>

            *{
                font-family:Arabic Typesetting, serif !important;
                font-size: 22px ! important;
                background-color: #c2cfd4 !important;
            }
        </style>
        <x-slot name="logo">
            <img src="images/logo.jpeg" style="border-radius: 50px;width:80%;">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600" dir="rtl" style="display:center;color:rgb(97, 97, 205)">
            {{ __('رمز عبور خود را فراموش کرده اید؟ مشکلی نیست فقط آدرس ایمیل خود را به ما اطلاع دهید و ما یک پیوند بازنشانی رمز عبور را برای شما ایمیل می کنیم که به شما امکان می دهد رمز جدیدی را انتخاب کنید') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label style="direction:rtl;color:#002244;" dir="rtl"  for="email" value="{{ __('ایمیل') }}" />
                <x-input style=" background-color:rgb(236, 218, 218) !important" dir="rtl" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button style="color: rgb(228, 245, 0); background-color:rgb(6, 59, 1) !important">
                    {{ __('ارسال لینک ساخت پسورد جدید') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
