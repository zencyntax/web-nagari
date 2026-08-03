<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PerangkatRequest;
use App\Models\Jabatan;
use App\Models\Perangkat;
use Illuminate\Support\Facades\Storage;

class PerangkatController extends Controller
{
    public function index()
    {
        $search = request('search');

        $perangkats = Perangkat::with('jabatan')
            ->when($search, function ($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                    ->orWhereHas('jabatan', function ($q) use ($search) {
                        $q->where('nama_jabatan', 'like', "%{$search}%");
                    });
            })
            ->orderBy('urutan')
            ->paginate(10)
            ->withQueryString();

        return view('admin.perangkat.index', compact('perangkats', 'search'));
    }

    public function create()
    {
        $jabatans = Jabatan::orderBy('urutan')->get();

        return view('admin.perangkat.create', compact('jabatans'));
    }

    public function store(PerangkatRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')
                ->store('perangkat', 'public');
        }

        Perangkat::create($data);

        return redirect()
            ->route('admin.perangkat.index')
            ->with('success', 'Data perangkat berhasil ditambahkan.');
    }

    public function edit(Perangkat $perangkat)
    {
        $jabatans = Jabatan::orderBy('urutan')->get();

        return view('admin.perangkat.edit', compact(
            'perangkat',
            'jabatans'
        ));
    }

    public function update(PerangkatRequest $request, Perangkat $perangkat)
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {

            if ($perangkat->foto &&
                Storage::disk('public')->exists($perangkat->foto)) {

                Storage::disk('public')->delete($perangkat->foto);

            }

            $data['foto'] = $request->file('foto')
                ->store('perangkat', 'public');
        }

        $perangkat->update($data);

        return redirect()
            ->route('admin.perangkat.index')
            ->with('success', 'Data perangkat berhasil diperbarui.');
    }

    public function destroy(Perangkat $perangkat)
    {
        if ($perangkat->foto &&
            Storage::disk('public')->exists($perangkat->foto)) {

            Storage::disk('public')->delete($perangkat->foto);

        }

        $perangkat->delete();

        return redirect()
            ->route('admin.perangkat.index')
            ->with('success', 'Data perangkat berhasil dihapus.');
    }
}
