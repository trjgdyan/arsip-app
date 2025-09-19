@section('title', 'Surat > Detail Surat')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-900  leading-tight">
            {{ __('Detail Surat') }}
            <div class="mt-4">
                {{-- <p class="text-lg text-gray-200 dark:text-black">
                    Unggah surat yang telah terbit pada form ini untuk diarsipkan dengan tipe dokumen .pdf
                </p> --}}
                <table class="text-lg text-gray-200 dark:text-black">
                    <tr>
                        <td class="font-bold pr-4">Nomor Surat</td>
                        <td>: {{ $surat->nomor_surat }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold pr-4">Kategori</td>
                        <td>: {{ $surat->kategori->nama_kategori }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold pr-4">Judul</td>
                        <td>: {{ $surat->judul }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold pr-4">Waktu Terbit</td>
                        <td>: {{ $surat->created_at->format('d-m-Y') }}</td>
                    </tr>
                </table>
            </div>

        </h2>
    </x-slot>

    <div class="mt-6 justify-center items-center flex">
        <iframe src="{{ route('surat.stream', $surat->id) }}" width="90%" height="800px" style="border: none;">
        </iframe>
    </div>

    <div class="flex justify-start mt-6 mb-6">
        <button>
            <a href="{{ route('dashboard') }}"
                class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Kembali</a>
        </button>
        <a href="{{ route('surat.edit', $surat->id) }}"
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mr-2">Edit Surat</a>
    </div>

</x-app-layout>

<script>
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
