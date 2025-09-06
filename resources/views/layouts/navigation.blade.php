<div class="text-lg font-semibold text-gray-800 dark:text-black">
    @yield('title', 'Dashboard')
</div>

<div class="flex justify-end items-center w-full space-x-4">
    <!-- Dark Mode Toggle -->
    <button id="darkModeToggle" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-purple-300 transition">
        <!-- Icon Sun (Light Mode) -->
        <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden text-yellow-500" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 3v1m0 16v1m8.66-13.66l-.7.7M4.05 19.95l-.7-.7M21 12h-1M4 12H3m16.95 7.95l-.7-.7M6.34 6.34l-.7-.7M12 8a4 4 0 100 8 4 4 0 000-8z" />
        </svg>
        <!-- Icon Moon (Dark Mode) -->
        <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black dark:text-gray-300"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
        </svg>
    </button>

    <!-- Notification -->
    <button class="relative p-2 rounded-full hover:bg-gray-200 dark:hover:bg-purple-300 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black dark:text-gray-300" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
        </svg>
        <!-- Badge -->
        <span
            class="absolute top-1 right-1 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-white bg-red-500 rounded-full">
            3
        </span>
    </button>

    <!-- Avatar -->
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button
                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                <img class="h-10 w-10 rounded-full object-cover"
                    src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&color=7F9CF5&background=EBF4FF' }}"
                    alt="{{ Auth::user()->name }}">
            </button>
        </x-slot>

        <x-slot name="content">
            <!-- Profile -->
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

<script>
    const toggle = document.getElementById("darkModeToggle");
    const sun = document.getElementById("sunIcon");
    const moon = document.getElementById("moonIcon");

    if (localStorage.theme === "dark") {
        document.documentElement.classList.add("dark");
        sun.classList.remove("hidden");
        moon.classList.add("hidden");
    }

    toggle.addEventListener("click", () => {
        document.documentElement.classList.toggle("dark");
        if (document.documentElement.classList.contains("dark")) {
            sun.classList.remove("hidden");
            moon.classList.add("hidden");
            localStorage.theme = "dark";
        } else {
            sun.classList.add("hidden");
            moon.classList.remove("hidden");
            localStorage.theme = "light";
        }
    });
</script>
