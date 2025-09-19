    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- data table --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.3/css/dataTables.dataTables.min.css">
        <script src="https://cdn.datatables.net/2.3.3/js/dataTables.min.js"></script>

        {{-- alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased bg-gradient-to-br from-blue-200 via-blue to-blue-200">
        <div class="min-h-screen flex">

            {{-- Sidebar --}}
            @include('layouts.sidebar')

        {{-- Navbar --}}
            <div
                class="fixed top-4 left-0 md:left-72 right-4 z-50 h-16 rounded bg-blue-900 backdrop-blur-sm shadow-lg flex items-center px-4 justify-between">

                {{-- Tombol toggle hanya muncul di mobile --}}
                <button id="sidebarToggle" class="md:hidden text-white focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                @include('layouts.navigation')
            </div>

            {{-- Konten utama --}}
            <div class="flex-1 md:ml-72 mr-4 mt-24 mb-4 rounded-2xl bg-white/70 backdrop-blur-md shadow-lg p-6">
                @isset($header)
                    <header class="mb-6">
                        <div class="max-w-7xl mx-auto py-4 px-6">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <main>
                    {{ $slot }}
                </main>
            </div>

        </div>

        <script>
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');

            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
            });
        </script>
    </body>


    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>


    </html>
