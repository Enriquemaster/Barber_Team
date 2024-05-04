<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h1 class="py-10 md:py-3 text-center Bodoni md:text-2xl text-xl text-yellow-600 font-bold">Iniciar sesión</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="md:px-12 w-full md:mb-10">
            <x-input-label for="email" :value="__('Correo:')" class="block md:text-xl mb-2 text-white montserrat text-justify "/>
            <input id="email" type="email" name="email" :value="old('email')"  autofocus autocomplete="username" class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]"  />
            <x-input-error :messages="$errors->get('email')" class="text-justify mt-2" />
        </div>

        <!-- Password -->
       <div class="md:px-12 w-full mt-5">
            <x-input-label for="password" :value="__('Contraseña:')" class="block md:text-xl mb-2 text-white montserrat text-justify "/>
            <input id="password" type="password" name="password" autocomplete="current-password" class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]"  />
            <x-input-error :messages="$errors->get('password')" class="text-justify mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 text-left md:px-12">
            <label for="remember_me" class=" inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recordar mi contraseña') }}</span>
            </label>
        </div>

        <div class=" text-justify md:px-12 mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif
            <div class="flex items-center justify-center mt-4 text-center">
            <button class="Bodoni hover:bg-[#01043d] transition-colors transition-duration:150ms text-xl md:text-base font-bold font-bodoni py-2 bg-[#00066a] rounded-lg h-[50px] w-[320px] md:w-[40] inline-block text-[#D9C8A9]">
             {{ __('Ingresar') }}
            </button>
            </div>
        </div>
    </form>
</x-guest-layout>
