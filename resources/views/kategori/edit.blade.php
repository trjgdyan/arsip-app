@section('title', 'Kategori > Edit Kategori')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-900 leading-tight">
            {{ __('Edit Kategori Baru') }}
            <div>
                <p class="text-lg text-gray-200 dark:text-black">
                    Edit kategori pada form ini untuk melabel surat yang akan diarsipkan.
                </p>
            </div>

        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-0 pt-0">
            <div class="bg-white   p-6 rounded-lg shadow-lg">
                <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>
                        <input type="hidden" id="id" name="id" value="{{ $kategori->id }}">
                        <label for="id" class="block text-gray-700 font-bold mb-2">ID Kategori:</label>
                        <input type="text" id="id" name="id" value="{{ $kategori->id }}" disabled
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-100 cursor-not-allowed">
                    </div>

                    <div class="mb-4">
                        <label for="nama_kategori" class="block text-gray-700 font-bold mb-2">Nama Kategori:</label>
                        <input type="text" id="nama_kategori" name="nama_kategori"
                            value="{{ old('nama_kategori', $kategori->nama_kategori) }}"
                            class=" form control w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>
                    @error('nama_kategori')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-4">
                        <label for="keterangan" class="block text-gray-700 font-bold mb-2">Keterangan:</label>
                        <textarea id="keterangan" name="keterangan" rows="4"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>{{ old('keterangan', $kategori->keterangan) }}</textarea>

                    </div>
                    @error('keterangan')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="flex justify-start">
                        <button>
                            <a href="{{ route('kategori.index') }}"
                                class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Kembali</a>
                        </button>
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Update
                            Kategori</button>
                    </div>
                </form>
            </div>
        </div>
</x-app-layout>
