<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UmkmRequest;
use App\Models\Umkm;
use App\Models\UmkmCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UmkmController extends Controller
{
    public function index()
    {
        $search = request('search');

        $umkms = Umkm::with('category')
            ->when($search, function ($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                      ->orWhere('pemilik', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.umkm.index', compact(
            'umkms',
            'search'
        ));
    }

    public function create()
    {
        $categories = UmkmCategory::orderBy('nama')->get();

        return view('admin.umkm.create', compact('categories'));
    }

    public function store(UmkmRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['nama']);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')
                ->store('umkm/logo', 'public');
        }

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')
                ->store('umkm/foto', 'public');
        }

        Umkm::create($data);

        return redirect()
            ->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil ditambahkan.');
    }

    public function edit(Umkm $umkm)
{
    $categories = UmkmCategory::orderBy('nama')->get();

    $umkm->load('galleries');

    return view(
        'admin.umkm.edit',
        compact(
            'umkm',
            'categories'
        )
    );
}

    public function update(UmkmRequest $request, Umkm $umkm)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['nama']);

        if ($request->hasFile('logo')) {

            if ($umkm->logo && Storage::disk('public')->exists($umkm->logo)) {
                Storage::disk('public')->delete($umkm->logo);
            }

            $data['logo'] = $request->file('logo')
                ->store('umkm/logo', 'public');
        }

        if ($request->hasFile('foto')) {

            if ($umkm->foto && Storage::disk('public')->exists($umkm->foto)) {
                Storage::disk('public')->delete($umkm->foto);
            }

            $data['foto'] = $request->file('foto')
                ->store('umkm/foto', 'public');
        }

        $umkm->update($data);

        return redirect()
            ->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil diperbarui.');
    }

    public function destroy(Umkm $umkm)
    {
        if ($umkm->logo && Storage::disk('public')->exists($umkm->logo)) {
            Storage::disk('public')->delete($umkm->logo);
        }

        if ($umkm->foto && Storage::disk('public')->exists($umkm->foto)) {
            Storage::disk('public')->delete($umkm->foto);
        }

        $umkm->delete();

        return redirect()
            ->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil dihapus.');
    }
}
