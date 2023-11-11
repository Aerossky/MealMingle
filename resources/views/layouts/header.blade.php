
 <header class="py-3 lg:pt-6 lg:pb-14 bg-pink-200 font-Montserrat">
     <div class="container mx-auto lg:relative flex flex-col lg:flex-row lg:justify-between  lg:gap-y-0">
         {{-- Left Section --}}
         <div class="flex justify-center lg:justify-normal">
             <a href="http://">
                 <img src="{{ asset('img/logo.png') }}" alt="" srcset="" width="150px">
             </a>
         </div>

         {{-- Middle Section --}}
         <div class="flex hidden lg:block items-center justify-center">
             <nav>
                 <ul class="flex space-x-4 text-white">
                     <li><a href="#" class="hover:text-gray-300">HOME</a></li>
                     <li><a href="#" class="hover:text-gray-300">MENU</a></li>
                     <li><a href="#" class="hover:text-gray-300">ABOUT US</a></li>
                     <li><a href="#" class="hover:text-gray-300">FAQ</a></li>
                 </ul>
             </nav>
         </div>

         {{-- Right Section --}}
         <div class="flex items-center justify-center space-x-4">
             <div class="text-black">
                 <!-- Icon Cart -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M4 4h16a1 1 0 011 1v12a3 3 0 01-3 3H7a3 3 0 01-3-3V5a1 1 0 011-1zM4 8h16M4 12h16"></path>
                 </svg>
             </div>

             <div class="text-black font-medium">
                 <!-- Text Sign In -->
                 <a href="/signin" class="hover:text-gray-300">Sign In</a>
             </div>
         </div>
     </div>

 </header>
