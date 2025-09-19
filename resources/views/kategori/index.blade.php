@section('title', 'Kategori Surat')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white dark:text-black leading-tight">
            {{ __('Kategori Surat') }}
            <div>
                <p class="text-lg text-gray-200 dark:text-black">
                    Berikut ini adalah kategori yang bisa digunakan untuk melabel surat. Klik "Tambah" pada kolom aksi
                    untuk menambahkan keterangan baru.
                </p>
            </div>
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-xl p-4">
                {{-- Bagian atas: search & tombol --}}
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-4">
                    <form action="{{ route('kategori.index') }}" method="GET" class="flex w-full md:w-1/3">
                        <input type="text" name="search" placeholder="🔍 Cari Kategori..."
                            class="flex-1 border border-gray-300 rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{ request('search') }}">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-r-lg hover:bg-blue-600 transition">
                            Cari
                        </button>
                    </form>

                    <a href="{{ route('kategori.create') }}"
                        class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 shadow-sm transition w-full md:w-auto text-center">
                        + Tambah Kategori
                    </a>
                </div>

                {{-- Data Table --}}
                <div class="overflow-x-auto">
                    <table id="dataKategori" class="min-w-full table-auto border-collapse text-sm">
                        <thead class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white">
                            <tr>
                                <th class="px-4 py-2 text-center">ID Kategori</th>
                                <th class="px-4 py-2 text-center">Nama Kategori</th>
                                <th class="px-4 py-2 text-center">Keterangan</th>
                                <th class="px-4 py-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($kategoris as $kategori)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-4 py-2 text-center">{{ $kategori->id }}</td>
                                    <td class="px-4 py-2 font-medium">{{ $kategori->nama_kategori }}</td>
                                    <td class="px-4 py-2">{{ $kategori->keterangan }}</td>
                                    <td class="px-4 py-2 flex flex-col sm:flex-row justify-center gap-2">
                                        <a href="{{ route('kategori.edit', $kategori->id) }}"
                                            class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition text-center">
                                            Edit
                                        </a>
                                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST"
                                            class="w-full sm:w-auto delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition w-full sm:w-auto btn-delete">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $('#dataKategori').DataTable({
        responsive: true,
        paging: true,
        ordering: true,
        searching: false,
        language: {
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            zeroRecords: "Tidak ada data ditemukan",
            info: "Menampilkan halaman _PAGE_ dari _PAGES_",
            infoEmpty: "Tidak ada data tersedia",
            infoFiltered: "(disaring dari total _MAX_ data)"
        },
    });
    // Event delegation untuk semua tombol hapus
    $(document).on('click', '.btn-delete', function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
    @if (session('success'))
        Swal.fire({
            toast: true,
            position: 'top',
            icon: 'success',
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    @endif
</script>
