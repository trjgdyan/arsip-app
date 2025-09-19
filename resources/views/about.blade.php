@section('title', 'About')

<x-app-layout>
    <div class="relative bg-gradient-to-br from-blue-50 via-white to-blue-100 py-20 px-6 lg:px-8 overflow-hidden">

        <!-- Ornamen Lingkaran -->
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-200 rounded-full opacity-40 blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-blue-300 rounded-full opacity-30 blur-3xl"></div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-16 relative z-10">

            <!-- Bagian Kiri: Teks -->
            <div class="space-y-6">
                <h1 class="text-5xl font-extrabold text-blue-900 leading-tight">
                    👋 Hi, I'm
                    <span class="bg-gradient-to-r from-blue-600 to-blue-400 bg-clip-text text-transparent">
                        Tri Jagad Ariyani
                    </span>
                    <br>
                    <span class="text-blue-700">Your Friendly Software Engineer 🚀</span>
                </h1>

                <p class="text-blue-800 text-lg max-w-lg">
                    Saya adalah seorang <span class="font-bold text-blue-600">Software Engineer</span>
                    yang selalu penasaran, senang belajar hal baru,
                    dan suka bikin <span class="italic">hal serius jadi fun!</span> 💡
                    Kalau lagi nggak ngoding, biasanya saya sibuk dengan buku, film,
                    atau game 🎮.
                </p>

                <!-- Info Kecil -->
                {{-- <div class="flex gap-8 mt-6">
                    <div class="text-center">
                        <p class="text-3xl font-extrabold text-blue-500">2+</p>
                        <p class="text-sm text-blue-700">Years Exp.</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-extrabold text-blue-500">10+</p>
                        <p class="text-sm text-blue-700">Projects 🎉</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-extrabold text-blue-500">5+</p>
                        <p class="text-sm text-blue-700">Tech Stacks</p>
                    </div>
                </div> --}}

                <!-- NIM & Tanggal -->
                <div class="mt-6 space-y-1 text-blue-800">
                    <p><span class="font-semibold text-blue-600">NIM:</span> 2141720049</p>
                    <p><span class="font-semibold text-blue-600">Tanggal Pembuatan:</span> 19 September 2025</p>
                </div>

                <!-- Tombol -->
                <div class="flex gap-4 mt-8">
                    <a href="https://trijagad-portofolio.vercel.app/"
                        class="bg-blue-600 text-white px-7 py-3 rounded-full font-semibold shadow-lg hover:scale-105 hover:bg-blue-700 transition transform">
                        🌟 Portfolio
                    </a>
                    <a href="mailto:trjgdyan@gmail.com"
                        class="border-2 border-blue-400 text-blue-500 px-7 py-3 rounded-full font-semibold hover:bg-blue-500 hover:text-white transition transform hover:scale-105">
                        ✨ Hire Me
                    </a>
                </div>
            </div>

            <!-- Bagian Kanan: Foto -->
            <div class="relative group flex justify-center">
                <div
                    class="absolute -top-6 -right-6 w-80 h-80 bg-gradient-to-tr from-blue-300 to-blue-100 rounded-full blur-2xl opacity-70 group-hover:scale-110 transition">
                </div>
                <img src="{{ asset('images/fotoku.png') }}" alt="Foto Profil"
                    class="rounded-full shadow-2xl object-cover w-96 h-96 border-4 border-blue-400 transform group-hover:scale-105 transition duration-500">
            </div>
        </div>
    </div>
</x-app-layout>
