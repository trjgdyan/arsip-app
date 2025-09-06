@section('title', 'Kategori > Create Kategori')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Tambah Kategori Baru') }}
            <div>
                <p class="text-lg text-gray-200 dark:text-black">
                    Tambahkan kategori baru pada form ini untuk melabel surat yang akan diarsipkan.
                </p>
            </div>

        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-0 pt-0">
            <div class="bg-white   p-6 rounded-lg shadow-lg">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="id_kategori" class="block text-gray-700 font-bold mb-2">ID Kategori:</label>
                        <input type="text" id="id_kategori" name="id_kategori" value="1" disabled
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-100 cursor-not-allowed">
                    </div>

                    <div class="mb-4">
                        <label for="nama_kategori" class="block text-gray-700 font-bold mb-2">Nama Kategori:</label>
                        <input type="text" id="nama_kategori" name="nama_kategori"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="keterangan" class="block text-gray-700 font-bold mb-2">Keterangan:</label>
                        <textarea id="keterangan" name="keterangan" rows="4"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required></textarea>
                    </div>
                    <div class="flex justify-start">
                        <button>
                            <a href="{{ route('kategori.index') }}"
                                class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Kembali</a>
                        </button>
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Tambah
                            Kategori</button>
                    </div>
                </form>
            </div>
        </div>
</x-app-layout>
