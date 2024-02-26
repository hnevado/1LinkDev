    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-orange-100 flex justify-center items-center h-screen">
           
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="{{ asset('img/login.webp') }}" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
        
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <h1 class="text-4xl font-extrabold mb-4 text-center bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-500">1LinkDev</h1>
            <h2 class="text-2xl text-center bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-500">All your relevant links in one place</h2>
            
            <div class="flex justify-center items-center mt-8 mb-8">
            <!-- thing line -->
            <div class="w-1/2 h-px bg-purple-500"></div>
            <!-- also center horizontally -->
            <div class="flex justify-center items-center">
                    
                    <!--<span class="mx-1 font-bold text-center bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-500">Powered by @hnevado</span> -->
                    <a class="hover:opacity-75 transition duration-300 ease-in-out mx-1" 
                       href="https://github.com/hnevado"
                       rel="noopener noreferrer" 
                       target="_blank">
                        <x-miniatura-perfiles-usuario 
                        :src="'https://unavatar.io/github'" 
                        :alt="'Github'"/>
                    </a>
                    
            </div>

            <div class="w-1/2 h-px bg-purple-500"></div>
        </div>



        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-black"/>
                <x-text-input id="email" class="w-full border border-purple-300 rounded-md py-2 px-3 focus:outline-none focus:border-orange-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="off" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-black"/>

                <x-text-input id="password" class="w-full border border-purple-300 rounded-md py-2 px-3 focus:outline-none focus:border-orange-500"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-purple-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-black">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-black hover:text-purple-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a> 
                    <a class="mr-4 ml-4 underline text-sm text-purple-500  hover:text-purple-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a> 
                @endif

                <x-primary-button class="ms-3 bg-purple-500">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>

       </div>

    </div>
