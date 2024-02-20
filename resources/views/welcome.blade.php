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
            <h1 class="text-4xl font-extrabold mb-4 text-orange-500 text-center">1LinkDev</h1>
            <h2 class="text-2xl text-orange-500 text-center">All your relevant links in one place</h2>
            
            <div class="flex justify-center items-center mt-8 mb-8">
            <!-- thing line -->
            <div class="w-1/2 h-px bg-orange-300"></div>
            <!-- also center horizontally -->
            <div class="mr-8 flex justify-center items-center">
                   <a class="hover:opacity-75 transition duration-300 ease-in-out mx-1" href="#">
                        <img src="https://unavatar.io/test?ttl=1h" alt="TEST" class="w-8 h-8 rounded-full mx-4">
                    </a>
                    
                    <a class="hover:opacity-75 transition duration-300 ease-in-out mx-1" href="#">
                        <img src="https://unavatar.io/test?ttl=1h" alt="TEST" class="w-8 h-8 rounded-full mx-4">
                    </a>

                    <a class="hover:opacity-75 transition duration-300 ease-in-out mx-1" href="https://pinkary.com/@bmartus">
                        <img src="https://unavatar.io/test?ttl=1h" alt="TEST" class="w-8 h-8 rounded-full mx-4">
                    </a>

                    <a class="hover:opacity-75 transition duration-300 ease-in-out mx-1" href="https://pinkary.com/@hussein">
                        <img src="https://unavatar.io/test?ttl=1h" alt="TEST" class="w-8 h-8 rounded-full mx-4">
                    </a>

                    <a class="hover:opacity-75 transition duration-300 ease-in-out mx-1" href="https://pinkary.com/@takielias">
                        <img src="https://unavatar.io/test?ttl=1h" alt="TEST" class="w-8 h-8 rounded-full mx-4">
                    </a>
                            </div>
            <div class="w-1/2 h-px bg-orange-300"></div>
        </div>


            <form action="#" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label for="username" class="block text-orange-500">Username</label>
                    <input type="text" id="username" name="username" class="w-full border border-orange-300 rounded-md py-2 px-3 focus:outline-none focus:border-orange-500" autocomplete="off">
                </div>
                
                <div class="mb-4">
                    <label for="password" class="block text-orange-500">Password</label>
                    <input type="password" id="password" name="password" class="w-full border border-orange-300 rounded-md py-2 px-3 focus:outline-none focus:border-orange-500" autocomplete="off">
                </div>
            
                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>

                <div class="mt-6 text-center">
                  @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-md py-2 px-4 w-full">Register</a>
                  @endif

                  <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-md py-2 px-4 w-full">Forgot Password?</a>
                </div>

                <div class="mb-6 text-orange-500 mt-6">
                    
                </div>

            </form>

           
            
            
        </div>

    </div>

    </body>
</html>
