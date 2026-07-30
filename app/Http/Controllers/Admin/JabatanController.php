<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use App\Http\Requests\Admin\JabatanRequest;

class JabatanController extends Controller
{
    public function index()
{
    $search = request('search');

    $jabatans = Jabatan::when($search, function ($query) use ($search) {
            $query->where('nama_jabatan', 'like', "%{$search}%");
        })
        ->orderBy('urutan')
        ->paginate(10)
        ->withQueryString();

    return view('admin.jabatan.index', compact('jabatans', 'search'));
}

    public function create()
    {
        return view('admin.jabatan.create');
    }

    public function store(JabatanRequest $request)
{
    Jabatan::create($request->validated());

    return redirect()
        ->route('admin.jabatan.index')
        ->with('success', 'Data jabatan berhasil ditambahkan.');
}

    public function edit(Jabatan $jabatan)
{
    return view('admin.jabatan.edit', compact('jabatan'));
}

    public function update(JabatanRequest $request, Jabatan $jabatan)
{
    $jabatan->update($request->validated());

    return redirect()
        ->route('admin.jabatan.index')
        ->with('success', 'Data jabatan berhasil diperbarui.');
}

    public function destroy(Jabatan $jabatan)
{
    $jabatan->delete();

    return redirect()
        ->route('admin.jabatan.index')
        ->with('success', 'Data jabatan berhasil dihapus.');
}
}
