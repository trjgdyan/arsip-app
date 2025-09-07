@section('title', 'Kategori Surat')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white dark:text-black leading-tight">
            {{ __('Kategori Surat') }}
            <div>
                <p class="text-lg text-gray-200 dark:text-black">
                    Berikut ini adalah kategori yang bisa digunakan untuk melabel surat. klik "Tambah" pada kolom aksi
                    untuk menambahkan keterangan baru.
                </p>
            </div>
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="flex justify-between items-center mb-4">
                    {{-- Search (kiri) --}}
                    {{-- <form action="#" method="GET" class="flex">
                        <input id="searchKategori" type="text" name="search" placeholder="Cari surat..."
                            class="border border-gray-300 rounded-l px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 "
                            value="{{ request('search') }}">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-600">Cari</button>
                    </form> --}}
                    <div class="flex">
                        <input id="searchKategori" type="text" placeholder="Cari kategori..."
                            class="border border-gray-300 rounded-l px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="button"
                            class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-600">Cari</button>
                    </div>

                    {{-- Tombol kanan --}}
                    <div class="flex items-center">
                        <a href="{{ route('kategori.create') }}"
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Tambah Kategori</a>

                        {{-- <a href="{{ route('dashboard') }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 ml-2">Cetak Laporan</a> --}}
                    </div>
                </div>

                <table id="dataKategori" class="display stripe hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoris as $kategori)
                            <tr>
                                <td>{{ $kategori->id }}</td>
                                <td>{{ $kategori->nama_kategori }}</td>
                                <td>{{ $kategori->keterangan }}</td>
                                <td>
                                    <a href="{{ route('kategori.edit', $kategori->id) }}"
                                        class="bg-blue-500 text-white px-3 py-1 hover:bg-blue-600 mr-2">Edit</a>
                                    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 text-white px-3 py-1 hover:bg-red-600 "
                                            onclick="return confirm ('Apakah Anda yakin untuk menghapus kategori {{ $kategori->nama_kategori }}?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $(document).ready(function() {
        var table = $('#dataKategori').DataTable({
            responsive: true,
            paging: true,
            ordering: true,
            searching: true,
            columnDefs: [{
                    targets: [0, 2, 3],
                    searchable: false
                },
                {
                    targets: 1,
                    searchable: true
                }
            ]
        });

        $('#searchKategori').on('keyup', function() {
            table.column(1).search(this.value).draw();
        });
    });
</script>
