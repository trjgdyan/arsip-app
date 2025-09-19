<aside id="sidebar"
    class="fixed top-0 left-0 w-64 min-h-screen h-full bg-blue-900 shadow-md transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-40"
    aria-label="Sidebar">

    <div class="overflow-y-auto py-4 px-3">
        {{-- Logo --}}
        <div class="flex items-center mb-5 justify-center">
            <img src="{{ asset('images/logo arsip-white.png') }}" alt="Logo" class="h-16 w-16">
            <span class="self-center text-2xl font-extrabold whitespace-nowrap ml-2 text-white">ARSIPKU</span>
        </div>
        <hr class="my-3 border-gray-200">

        {{-- Menu --}}
        <ul class="space-y-2 mt-8">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 text-base font-medium rounded-lg
                    {{ request()->routeIs('dashboard') ? 'bg-blue-500 text-white' : 'text-white hover:bg-blue-500' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('kategori.index') }}"
                    class="flex items-center p-2 text-base font-medium rounded-lg
                    {{ request()->routeIs('kategori.*') ? 'bg-blue-500 text-white' : 'text-white hover:bg-blue-500' }}">
                    <svg aria-hidden="true" class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                        </path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a4 4 0 01-4 4H7a4 4 0 01-4-4V5z">
                        </path>
                    </svg>
                    <span class="ml-3">Kategori Surat</span>
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}"
                    class="flex items-center p-2 text-base font-medium rounded-lg
                    {{ request()->routeIs('about') ? 'bg-blue-500 text-white' : 'text-white hover:bg-blue-500' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.5 3.75a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V6.75a3 3 0 0 0-3-3h-15Zm4.125 3a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm-3.873 8.703a4.126 4.126 0 0 1 7.746 0 .75.75 0 0 1-.351.92 7.47 7.47 0 0 1-3.522.877 7.47 7.47 0 0 1-3.522-.877.75.75 0 0 1-.351-.92ZM15 8.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15ZM14.25 12a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H15a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="ml-3">About</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
