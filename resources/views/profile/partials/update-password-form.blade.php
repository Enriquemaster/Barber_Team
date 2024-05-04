<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 text-center mb-5">
            {{ __('Actualizar contraseña') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Asegúrese que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Contraseña actual')" />
            <input id="current_password" name="current_password" type="password" class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]"  autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Nueva contraseña')" />
            <input id="password" name="password" type="password" class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]"  autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />
            <input id="password_confirmation" name="password_confirmation" type="password" class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]"  autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center">
            <button class="hover:bg-[#750f0f] transition-colors transition-duration:150ms md:text-base py-2 bg-[#AB1919] rounded-lg h-[40px] w-[100px] md:w-[140px] inline-block text-[#D9C8A9]"
>{{ __('GUARDAR') }}</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
