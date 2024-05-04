<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 text-center mb-5">
            {{ __('Información de perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Actualice la información de su cuenta y la dirección de correo electrónico.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="text-white bg-zinc-600 rounded-lg montserrat w-full h-10 text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-[#D9C8A9]"  :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Su dirección de correo electrónico no está verificada.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Haga clic aquí para volver a enviar el correo electrónico de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center justify-center flex-col">
        <button class="hover:bg-[#750f0f] transition-colors transition-duration:150ms md:text-base py-2 bg-[#AB1919] rounded-lg h-[40px] w-[100px] md:w-[140px] inline-block text-[#D9C8A9]">{{ __('GUARDAR') }}</button>

            @if (session('status') === 'profile-updated')
                <br><p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400 flex"
                >{{ __('Información guardada') }}</p>
            @endif
        </div>
    </form>
</section>
