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


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased bg-gradient-to-br from-purple-100 via-white to-blue-100">
        <div class="min-h-screen flex">

            {{-- Sidebar --}}
            <div class="w-64 min-h-screen fixed mx-4 mt-4 shadow-lg rounded bg-slate-600-300/70 backdrop-blur-md">
                @include('layouts.sidebar')
            </div>


            {{-- Navbar --}
                {{-- <div
                class="fixed top-4 left-72 right-4 z-50 h-16  flex items-center px-4"> --}}
            <div
                class="fixed top-4 left-72 right-4 z-50 h-16 rounded bg-white/70 backdrop-blur-sm shadow-lg flex items-center px-4">
                @include('layouts.navigation')
            </div>


            {{-- Konten utama --}}
            <div class="flex-1 ml-72 mr-4 mt-24 mb-4 rounded-2xl bg-white/70 backdrop-blur-md shadow-lg p-6">
                {{-- Header opsional --}}
                @isset($header)
                    {{-- <header class="bg-white/80 backdrop-blur-sm dark:bg-purple-300 shadow rounded-lg mb-6"> --}}
                    <header class="mb-6">
                        <div class="max-w-7xl mx-auto py-4 px-6">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                {{-- Page Content --}}
                <main>
                    {{ $slot }}
                </main>
            </div>

            </div">
    </body>

    </html>
