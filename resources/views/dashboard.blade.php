@section('title', 'Dashboard')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white dark:text-black leading-tight">
            {{ __('Arsip Surat') }}
            <div>
                <p class="text-lg text-gray-200 dark:text-black">
                    Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. Klik "Lihat" pada kolom aksi untuk
                    menampilkan surat.
                </p>
            </div>
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white   ">
                <div class="flex justify-between items-center mb-4">
                    {{-- Search (kiri) --}}
                    <form action="{{ route('dashboard') }}" method="GET" class="flex">
                        <input type="text" name="search" placeholder="Cari surat..."
                            class="border border-gray-300 rounded-l px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 "
                            value="{{ request('search') }}">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-600">Cari</button>
                    </form>

                    {{-- Tombol kanan --}}
                    <div class="flex items-center">
                        <a href="{{ route('surat.create') }}"
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Tambah Surat</a>

                        <a href="{{ route('dashboard') }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 ml-2">Cetak Laporan</a>
                    </div>
                </div>

                <table id="dataSurat" class="display stripe hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Waktu Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>001/SM/2023</td>
                            <td>Surat Masuk</td>
                            <td>Undangan Rapat</td>
                            <td>2023-10-01</td>
                            <td>
                                <button class="bg-blue-500 text-white px-3 py-1 hover:bg-blue-600">Lihat</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>002/SM/2023</td>
                            <td>Surat Masuk</td>
                            <td>Pemberitahuan Libur</td>
                            <td>2023-10-05</td>
                            <td>
                                <button class="bg-blue-500 text-white px-3 py-1 hover:bg-blue-600">Lihat</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $(document).ready(function() {
        $('#dataSurat').DataTable({
            responsive: true,
            paging: true,
            ordering: true,
            searching: false,
        });

    });
</script>
