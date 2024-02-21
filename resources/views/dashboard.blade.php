<x-app-layout>

  <div class="py-6">


    <div class="flex flex-col items-center justify-center py-10">
        <div class="max-w-md w-full rounded-lg shadow-sm shadow-purple-300 overflow-hidden">
            <div class="bg-gradient-to-r p-5 text-white text-center">
                <img src="https://gravatar.com/avatar/1ff146b0020a985244c2d05dad7cf0b3c3eda1a33b4ef61fdcb89740944c17de?s=300" 
                     class="h-24 w-24 rounded-full mx-auto">
                <h2 class="font-semibold leading-tight text-3xl text-center">   
                    <strong class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-500">{{'@'.$username}}</strong>
                </h2>

                 <div class="text-sm text-black hover:text-gray-500">
                    Aquí mi biografía
                </div>
             </div>

            <div class="p-5">
                 <p class="text-center text-black">No links yet. Add your first link!</p>
            </div>

            <div class="px-4">
                <div class="py-8">
                    <div class="border-purple-500 border-t"></div>
                </div>
            </div>

                <div class="px-5 py-4">
                    <div class="px-5">
                        <div>
                            <button class="flex items-center justify-center w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white font-bold py-2 px-4 rounded-lg 
                                           hover:bg-gradient-to-r hover:from-purple-500 hover:to-blue-600 transition duration-300 ease-in-out">
                                <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                
                                @if ($username === Auth::user()->name)
                                    Add New Link
                                @endif
                    
                            </button>
                        </div>
                    </div>
                </div>
         </div>
    </div>

  </div>
    
</x-app-layout>
