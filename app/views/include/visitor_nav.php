<nav class="bg-white border border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
      <!-- Logo -->
      <a href="#" class="text-2xl font-semibold dark:text-white">WikiCrafting</a>

      <!-- Toggle Button for Small Screens -->
      <button data-collapse-toggle="navbar-links" type="button" class="inline-flex items-center p-2 md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>

      <!-- Centered Navigation Links and Search Bar -->
      <div class="flex-grow flex items-center justify-center">
        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-3">
          <a href="#" class="font-bold text-black hover:text-gray-700">Home</a>
          <a href="#" class="font-bold text-black hover:text-gray-700">Write</a>
        </div>

        <!-- Search Bar -->
        <div class="relative mx-4">
          <input class="border border-gray-300 placeholder-current h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none dark:bg-gray-500 dark:border-gray-50 dark:text-gray-200" type="search" name="search" placeholder="Search">
          <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
            <svg class="text-gray-600 dark:text-gray-200 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
              <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Login/Sign Up Buttons (Visible in Burger Menu on Small Screens) -->
      <div class="hidden md:flex items-center space-x-3">
        <button class="font-bold text-black hover:text-gray-700 focus:outline-none">Log In</button>
        <button class="font-bold text-white px-4 py-2 rounded bg-black hover:bg-gray-800 focus:outline-none">Sign Up</button>
      </div>
    </div>

    <!-- Responsive Navigation Links -->
    <div class="hidden md:flex flex-col mt-4 border-t border-gray-100 md:border-0 md:mt-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700" id="navbar-links">
      <a href="#" class="py-2 px-4 text-black hover:text-gray-700 md:hidden">Home</a>
      <a href="#" class="py-2 px-4 text-black hover:text-gray-700 md:hidden">Write</a>
    </div>
  </nav>