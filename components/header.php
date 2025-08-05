<header class="mb-2 px-4 shadow-md bg-white animate-fade-in-down">
  <div class="relative mx-auto flex max-w-screen-lg flex-col py-4 sm:flex-row sm:items-center sm:justify-between transition-all duration-500">

    <!-- Logo -->
    <a class="flex items-center text-2xl font-black text-sky-600 transition-colors duration-300" style="text-shadow: 1px 1px 2px rgba(255,255, 255, 0.5);" href="#">
      <span class="mr-2 text-3xl">JKP</span>
    </a>

    <!-- Hamburger for mobile -->
    <input class="peer hidden" type="checkbox" id="navbar-open" />
    <label for="navbar-open" class="absolute right-0 mt-1 cursor-pointer text-2xl sm:hidden text-sky-700 hover:text-sky-900 transition-colors duration-300">
      <!-- <span class="sr-only">Toggle Navigation</span> -->

       <!-- Icon Hamburger -->
      <svg class="block peer-checked:hidden" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 448 512" fill="currentColor">
        <path d="M0 96c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm448 160c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h384c17.7 0 32 14.3 32 32z" />
      </svg>

      <!-- Icon X -->
      <svg class="hidden peer-checked:block" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" fill="currentColor">
        <path d="M231 256L384 103c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L197 222 49 69c-9.4-9.4-24.6-9.4-33.9 0S5.7 93.4 15.1 103L163 256 15 409c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0L197 290l147 152c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L231 256z"/>
      </svg>
    </label>

    <!-- Navigation -->
    <nav aria-label="Header Navigation" class="peer-checked:block hidden pl-2 py-6 sm:block sm:py-0">
      <ul class="flex flex-col gap-y-4 sm:flex-row sm:gap-x-8">
        <li>
          <a href="#" class="nav-link">Utama</a>
        </li>
        <li>
          <a href="#" class="nav-link">Profil</a>
        </li>
        <li>
          <a href="#" class="nav-link">Perkhidmatan</a>
        </li>
        <li>
          <a href="#" class="nav-link">Hubungi</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<script>
  document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', () => {
      document.getElementById('navbar-open').checked = false;
    });
  });
</script>