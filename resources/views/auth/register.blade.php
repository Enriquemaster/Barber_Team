<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        
    <div class="mt-4">
        <x-input-label for="name" :value="__('Nombre completo:')" class="block md:text-xl mb-2 text-white montserrat text-justify" />
        <input id="name" type="text" name="name" :value="old('name')" autofocus autocomplete="name" class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]" />
        <x-input-error :messages="$errors->get('name')" class="text-justify mt-2" />
    </div>




        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo:')"  class="block md:text-xl mb-2 text-white montserrat text-justify " />
            <input id="email" type="email" name="email" :value="old('email')" autocomplete="username"  class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]"/>
            <x-input-error :messages="$errors->get('email')"  class="text-justify mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña:')" class="block md:text-xl mb-2 text-white montserrat text-justify"/>
            <input id="password" class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]"
                            type="password"
                            name="password"
                            autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')"  class="text-justify mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" class="block md:text-xl mb-2 text-white montserrat text-justify"/>
            <input id="password_confirmation" class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]"
                            type="password"
                            name="password_confirmation" autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="text-justify mt-2" />
        </div>

        <div class="flex flex-col ">
        <div class="flex justify-items-start mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Ya estás registrado?') }}
            </a>
            </div>
            <div class="flex items-center justify-center mt-4">
            <button class="Bodoni hover:bg-[#750f0f] transition-colors transition-duration:150ms text-xl md:text-base font-bold font-bodoni py-2 bg-[#AB1919] rounded-lg h-[50px] w-[320px] md:w-[40] inline-block text-[#D9C8A9]">
                {{ __('Register') }}
            </button>
            </div>
        </div>
        
    </form>
</x-guest-layout>
