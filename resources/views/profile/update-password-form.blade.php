<x-form-section dir="rtl" submit="updatePassword">
    <x-slot name="title">
       تغییر رمز عبور
    </x-slot>

    <x-slot name="description">
        شما می توانید در این قسمت کلمه عبور خود را تغییر دهید
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="کلمه عبور فعلی" />
            <x-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="کلمه عبور جدید" />
            <x-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="تکرار کلمه عبور" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            <p  style="margin-left:50px;color:red">ذخیره شد</p>
        </x-action-message>

        <x-button style="color:rgb(187, 241, 187)">
            ثبت تغییرات

        </x-button>
    </x-slot>
</x-form-section>
