<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">

    <div class="bg-orange-100 flex justify-center items-center h-screen">
           
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="{{ asset('img/login.webp') }}" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
        
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <h1 class="text-4xl font-extrabold mb-4 text-center">1LinkDev</h1>
            <h2 class="text-2xl text-black text-center">All your relevant links in one place</h2>
            
            <div class="flex justify-center items-center mt-8 mb-8">
            <!-- thing line -->
            <div class="w-1/2 h-px bg-black"></div>
            <!-- also center horizontally -->
            <div class="mr-8 flex justify-center items-center">
                    
                    <x-miniatura-perfiles-usuario 
                     :src="'https://unavatar.io/test?ttl=1h'" 
                     :alt="'foto perfil'"/>

                     <x-miniatura-perfiles-usuario 
                     :src="'https://unavatar.io/test?ttl=1h'" 
                     :alt="'foto perfil'"/>

                     <x-miniatura-perfiles-usuario 
                     :src="'https://unavatar.io/test?ttl=1h'" 
                     :alt="'foto perfil'"/>

                     <x-miniatura-perfiles-usuario 
                     :src="'https://unavatar.io/test?ttl=1h'" 
                     :alt="'foto perfil'"/>

                     <x-miniatura-perfiles-usuario 
                     :src="'https://unavatar.io/test?ttl=1h'" 
                     :alt="'foto perfil'"/>
            
            </div>

            <div class="w-1/2 h-px bg-black"></div>
        </div>



        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-black"/>
                <x-text-input id="email" class="w-full border border-orange-300 rounded-md py-2 px-3 focus:outline-none focus:border-orange-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-black"/>

                <x-text-input id="password" class="w-full border border-orange-300 rounded-md py-2 px-3 focus:outline-none focus:border-orange-500"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-orange-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-black">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-black hover:text-orange-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3 bg-orange-500">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>

       </div>

    </div>

    </body>
</html>
