<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $surats = Surat::with('kategori')->get();
        // return view('dashboard', compact('surats'));
        $query = Surat::with('kategori');
        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }
        $surats = $query->get();

        return view('dashboard', compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriSurat = Kategori::all(['id', 'nama_kategori']);
        return view('surat.create', compact('kategoriSurat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:50|unique:surats,nomor_surat',
            'judul' => 'required|string|max:100',
            'kategori_id' => 'required|exists:kategoris,id',
            'file_path' => 'required|mimes:pdf|max:2048',
        ]);

        $path = $request->file('file_path')->store('surats', 'public');

        Surat::create([
            'nomor_surat' => $validated['nomor_surat'],
            'judul' => $validated['judul'],
            'kategori_id' => $validated['kategori_id'],
            'file_path' => $path

        ]);

        return redirect()->route('surat.index')->with('success', 'Surat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Surat $surat)
    {
        $surat = Surat::with('kategori')->findOrFail($surat->id);
        return view('surat.show', compact('surat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surat $surat)
    {
        $surat = Surat::with('kategori')->findOrFail($surat->id);
        $kategoris = Kategori::all(['id', 'nama_kategori']);
        return view('surat.edit', compact('surat', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surat $surat)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:50|unique:surats,nomor_surat',
            'judul' => 'required|string|max:100',
            'kategori_id' => 'required|exists:kategoris,id',
            'file_path' => 'required|mimes:pdf|max:2048',
        ]);

        $path = $request->file('file_path')->store('surats', 'public');

        Surat::create([
            'nomor_surat' => $validated['nomor_surat'],
            'judul' => $validated['judul'],
            'kategori_id' => $validated['kategori_id'],
            'file_path' => $path

        ]);

        return redirect()->route('surat.show')->with('success', 'Surat berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surat $surat)
    {
        $surat = Surat::findOrFail($surat->id);
        $surat->delete();

        return redirect()->route('surat.index')->with('success', 'Surat berhasil dihapus.');
    }

    public function download(Surat $surat)
    {
        $filePath = storage_path('app/public/' . $surat->file_path);

        if (file_exists($filePath)) {
            return response()->download($filePath, $surat->judul . '.pdf');
        }

        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }
}
