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

                    <form action="{{ route('dashboard') }}" method="GET" class="flex">
                        <input type="text" name="search" placeholder="Cari Judul Surat"
                            class="border border-gray-300 rounded-l px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 "
                            value="{{ request('search') }}">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-600">Cari</button>
                    </form>

                    <div class="flex items-center">
                        <a href="{{ route('surat.create') }}"
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Tambah Surat</a>

                        {{-- <a href="{{ route('dashboard') }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 ml-2">Cetak Laporan</a> --}}
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
                        @foreach ($surats as $surat)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $surat->nomor_surat }}</td>
                                <td>{{ $surat->kategori->nama_kategori }}</td>
                                <td>{{ $surat->judul }}</td>
                                <td>{{ $surat->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <a href="{{route('surat.show', $surat->id)}}" class="bg-green-500 text-white px-3 py-1 hover:bg-green-600 mr-2">Lihat</a>
                                    {{-- <a href="{{route('surat.edit', $surat->id)}}" class="bg-blue-500 text-white px-3 py-1 hover:bg-blue-600 mr-2">Edit</a> --}}
                                    <a href="{{ route('surat.download', $surat->id) }}"
                                        class="bg-yellow-500 text-white px-3 py-1 hover:bg-yellow-600 mr-2">Unduh</a>
                                    <form action="{{ route('surat.destroy', $surat->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 text-white px-3 py-1 hover:bg-red-600 "
                                            onclick="return confirm('Apakah yakin akan menghapus surat {{ $surat->judul }}?');">Hapus</button>
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
        $('#dataSurat').DataTable({
            responsive: true,
            paging: true,
            ordering: true,
            searching: false,
        });
    });
</script>
