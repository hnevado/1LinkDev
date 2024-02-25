<x-app-layout>

@foreach ($userLinks as $user)
  <div class="py-6">
    <div class="flex flex-col items-center justify-center py-10">
        <div class="max-w-md w-full rounded-lg shadow-sm shadow-purple-300 overflow-hidden">
            <div class="bg-gradient-to-r p-5 text-white text-center">
                <img src="{{ Avatar::create($user->name)->setBackground('#6AB0F3')->setForeground('#000000')->toBase64() }}"
                     class="h-24 w-24 rounded-full mx-auto">
                <h2 class="font-semibold leading-tight text-3xl text-center flex items-center justify-center">   
                    <strong class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-500">{{'@'.$user->name}}</strong>
                    <a href="{{route('profile.edit')}}">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7 14C10.623 14 9.74999 13.1046 9.74999 12C9.74999 10.8954 10.623 10 11.7 10C12.7769 10 13.65 10.8954 13.65 12C13.65 12.5304 13.4445 13.0391 13.0789 13.4142C12.7132 13.7893 12.2172 14 11.7 14Z" stroke="#F3B06A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8841 16.063V14.721C16.8841 14.3887 17.0128 14.07 17.2419 13.835L18.1672 12.886C18.6443 12.3967 18.6443 11.6033 18.1672 11.114L17.2419 10.165C17.0128 9.93001 16.8841 9.61131 16.8841 9.27899V7.93599C16.8841 7.24398 16.3371 6.68299 15.6624 6.68299H14.353C14.029 6.68299 13.7182 6.55097 13.4891 6.31599L12.5638 5.36699C12.0867 4.87767 11.3132 4.87767 10.8361 5.36699L9.91087 6.31599C9.68176 6.55097 9.37102 6.68299 9.04702 6.68299H7.73759C7.41341 6.68299 7.10253 6.81514 6.87339 7.05034C6.64425 7.28554 6.51566 7.6045 6.51592 7.93699V9.27899C6.51591 9.61131 6.3872 9.93001 6.15809 10.165L5.23282 11.114C4.75573 11.6033 4.75573 12.3967 5.23282 12.886L6.15809 13.835C6.3872 14.07 6.51591 14.3887 6.51592 14.721V16.063C6.51592 16.755 7.06288 17.316 7.73759 17.316H9.04702C9.37102 17.316 9.68176 17.448 9.91087 17.683L10.8361 18.632C11.3132 19.1213 12.0867 19.1213 12.5638 18.632L13.4891 17.683C13.7182 17.448 14.029 17.316 14.353 17.316H15.6614C15.9856 17.3163 16.2966 17.1844 16.5259 16.9493C16.7552 16.7143 16.8841 16.3955 16.8841 16.063Z" stroke="#F3B06A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </h2>

                 <div class="text-sm text-center text-black hover:text-gray-500">
                   {{$user->biography}}
                </div>

                <div class="text-sm text-black hover:text-gray-500 mt-4">
                    <span class="bg-orange-300 p-1 rounded-full font-bold text-purple-900 cursor-pointer" id="showqr">Show QR Code</span> 
                    <div class="visible-print text-center flex justify-center items-center mt-4 hidden" id="myqr">
                        {!! QrCode::backgroundColor(255,237,213)->color(88,28,135)->size(100)->generate(Request::url()); !!}
                    </div>
                </div>
             </div>

            <div class="p-5">
            @if ($user->links->isEmpty())
                 <p class="text-center text-black">
                    No links yet. 
                    @if ($owner)
                     Add your first link!
                    @endif 
                  </p>
            @else 

              @foreach ($user->links as $link)

              <p class="mb-2">
                 <a href="{{$link->link}}" rel="noopener noreferrer" target="_blank" 
                 class="flex items-center justify-center w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white font-bold py-2 px-4 rounded-lg 
                        hover:bg-gradient-to-r hover:from-purple-500 hover:to-blue-600 transition duration-300 ease-in-out">
                    {{$link->description}}
              </a></p>
              @endforeach


            @endif
            </div>

            @if ($owner)

             <div class="px-4">
                <div class="py-8">
                    <div class="border-purple-500 border-t"></div>
                </div>
             </div>

              <div class="px-5 py-4">
                    <div class="px-5">
                        <div>
                            <button id="bLink" 
                                    class="flex items-center justify-center w-full bg-purple-500 text-white font-bold py-2 px-4 rounded-lg 
                                           hover:bg-gradient-to-r hover:from-purple-500 hover:to-blue-600 transition duration-300 ease-in-out">
                                <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                    Add New Link
                            </button>
                        </div>
                    </div>

                    <div class="px-5 mt-6 hidden opacity-0 transition-opacity duration-500" id="formLink">
                        <form name="addLink" method="POST" action="{{route('createLink')}}">
                            @csrf
                        <div>
                            <x-input-label for="link" :value="__('Link')" class="text-black"/>
                            <x-text-input id="link" 
                                    class="w-full border border-purple-300 rounded-md py-2 px-3 focus:outline-none focus:border-orange-500" 
                                    type="url" name="link" placeholder="Example: https://mydomain.com" required autofocus />
                            <x-input-error :messages="$errors->get('link')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Description')" class="text-black"/>
                            <x-text-input id="description" 
                                    class="w-full border border-purple-300 rounded-md py-2 px-3 focus:outline-none focus:border-orange-500" 
                                    type="text" name="description" placeholder="Example: My Instagram" 
                                    minlength="1" maxlength="120"
                                    required autofocus />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            

                            <x-primary-button class="bg-black-500">
                                {{ __('Add link to my profile') }}
                            </x-primary-button>

                        </div>

                        </form>
                    </div>

                </div>
               @endif
         </div>
    </div>

  </div>
  <script src="{{ asset('js/script.js') }}"></script>
@endforeach

</x-app-layout>
