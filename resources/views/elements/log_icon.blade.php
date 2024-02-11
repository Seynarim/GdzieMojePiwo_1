<div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
           
           @if(auth()->check())
           <div class="hidden sm:flex sm:items-center sm:ms-6">
               <x-dropdown align="right" width="48">
                   <x-slot name="trigger">
                       <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                           <div>{{ Auth::user()->name }}</div>

                           <div class="ms-1">
                               <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                   <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                               </svg>
                           </div>
                       </button>
                   </x-slot>

                   <x-slot name="content">
                       <x-dropdown-link :href="route('profile.edit')">
                           {{ __('Profile') }}
                       </x-dropdown-link>

                       <!-- Authentication -->
                       <form method="POST" action="{{ route('logout') }}">
                           @csrf

                           <x-dropdown-link :href="route('logout')"
                                   onclick="event.preventDefault();
                                               this.closest('form').submit();">
                               {{ __('Log Out') }}
                           </x-dropdown-link>
                       </form>
                   </x-slot>
               </x-dropdown>
           </div>
           @else
               <a href="{{ route('login') }}" class="text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-600 font-medium rounded-lg text-sm px-4 py-2 text-center">Konto</a>
           @endif
           <button id="navbarToggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg md:hidden hover:bg-amber-100 focus:outline-none focus:ring-2 focus:ring-amber-200" aria-controls="navbar-cta" aria-expanded="false">
               <span class="sr-only">Open main menu</span>
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
               </svg>
           </button>
       </div>