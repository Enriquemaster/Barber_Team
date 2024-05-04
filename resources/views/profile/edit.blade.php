<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-zinc-900 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class=" py-12">
        <div class="flex flex-col mx-auto w-11/12 md:flex-row mb-10 justify-center md:gap-20 ">
        <div class="p-4 sm:p-8 bg-zinc-900 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-zinc-900 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
            <div class="flex mx-auto md:w-1/3 p-4 bg-zinc-900 shadow sm:rounded-lg">
                <div class="flex items-center justify-center mx-auto p-2">
                    @include('profile.partials.delete-user-form')
                </div>
        </div>
    </div>
</x-app-layout>
