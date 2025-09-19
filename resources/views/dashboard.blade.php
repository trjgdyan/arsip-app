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
            <div class="bg-white shadow-md rounded-xl p-4">
                {{-- Bagian atas: search & tombol --}}
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-4">
                    <form action="{{ route('dashboard') }}" method="GET" class="flex w-full md:w-1/3">
                        <input type="text" name="search" placeholder="🔍 Cari Judul Surat..."
                            class="flex-1 border border-gray-300 rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{ request('search') }}">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-r-lg hover:bg-blue-600 transition">
                            Cari
                        </button>
                    </form>

                    <div class="flex flex-col md:flex-row md:space-x-2 w-full md:w-auto gap-2">
                        <a href="{{ route('surat.create') }}"
                            class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 shadow-sm transition text-center">
                            + Tambah Surat
                        </a>

                        <a href="{{ route('surat.export') }}"
                            class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600 shadow-sm transition inline-flex items-center justify-center">
                            Export Data
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 w-5 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Data Table --}}
                <div class="overflow-x-auto">
                    <table id="dataSurat" class="min-w-full table-auto border-collapse text-sm">
                        <thead class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white">
                            <tr>
                                <th class="px-4 py-2 text-left">No</th>
                                <th class="px-4 py-2 text-left">Nomor Surat</th>
                                <th class="px-4 py-2 text-left">Kategori</th>
                                <th class="px-4 py-2 text-left">Judul</th>
                                <th class="px-4 py-2 text-left">Waktu Terbit</th>
                                <th class="px-4 py-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($surats as $surat)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-2 font-medium">{{ $surat->nomor_surat }}</td>
                                    <td class="px-4 py-2">{{ $surat->kategori->nama_kategori }}</td>
                                    <td class="px-4 py-2">{{ $surat->judul }}</td>
                                    <td class="px-4 py-2">{{ $surat->created_at->format('d-m-Y') }}</td>
                                    <td class="px-4 py-2 flex flex-col sm:flex-row justify-center gap-2">
                                        <a href="{{ route('surat.show', $surat->id) }}"
                                            class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 transition text-center">
                                            Lihat
                                        </a>
                                        <a href="{{ route('surat.download', $surat->id) }}"
                                            class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600 transition text-center">
                                            Unduh
                                        </a>
                                        <form action="{{ route('surat.destroy', $surat->id) }}" method="POST"
                                            class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn-delete bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition w-full sm:w-auto">
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
    $(document).ready(function() {
        $('#dataSurat').DataTable({
            responsive: true,
            paging: true,
            ordering: true,
            searching: false,
            language: {
                lengthMenu: "Tampilkan _MENU_ data per halaman",
                zeroRecords: "Tidak ada data yang ditemukan",
                info: "Menampilkan halaman _PAGE_ dari _PAGES_",
                infoEmpty: "Tidak ada data tersedia",
                infoFiltered: "(disaring dari total _MAX_ data)"
            }
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
