<nav class="border-gray-200 dark:bg-gray-900 bg-[#0053c7]">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-6">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
          <span class="self-center text-2xl text-white font-semibold whitespace-nowrap dark:text-white">The Healthy Habit</span>
      </a>
      <button data-dropdown-toggle="navbar-default" id="mobile-nav-toggle" onclick="toggleDropdown(`mobile-nav-toggle`)" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex items-center flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:p-0 dark:text-white " aria-current="page">Home</a>
          </li>
          <li>
            <a href="/about" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
          </li>
          <li>
            <a href="/blog" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
          </li>
          <li>
            <a href="/contact" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
          </li>

          @guest
          <li>
            <a href="/login" class="text-blue-800 bg-[#d7fd8c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none dark:focus:ring-blue-800">Login</a>
          </li>
          @endguest

          @auth
          <li class="relative">
            <x-profile-dropdown />
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  