<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LembagaRequest;
use App\Models\Lembaga;
use Illuminate\Support\Facades\Storage;

class LembagaController extends Controller
{
    public function index()
    {
        $search = request('search');

        $lembagas = Lembaga::when($search, function ($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                      ->orWhere('ketua', 'like', "%{$search}%");
            })
            ->orderBy('urutan')
            ->paginate(10)
            ->withQueryString();

        return view('admin.lembaga.index', compact(
            'lembagas',
            'search'
        ));
    }

    public function create()
    {
        return view('admin.lembaga.create');
    }

    public function store(LembagaRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')
                ->store('lembaga', 'public');
        }

        Lembaga::create($data);

        return redirect()
            ->route('admin.lembaga.index')
            ->with('success', 'Data lembaga berhasil ditambahkan.');
    }

    public function edit(Lembaga $lembaga)
    {
        return view('admin.lembaga.edit', compact('lembaga'));
    }

    public function update(LembagaRequest $request, Lembaga $lembaga)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {

            if ($lembaga->logo &&
                Storage::disk('public')->exists($lembaga->logo)) {

                Storage::disk('public')->delete($lembaga->logo);
            }

            $data['logo'] = $request->file('logo')
                ->store('lembaga', 'public');
        }

        $lembaga->update($data);

        return redirect()
            ->route('admin.lembaga.index')
            ->with('success', 'Data lembaga berhasil diperbarui.');
    }

    public function destroy(Lembaga $lembaga)
    {
        if ($lembaga->logo &&
            Storage::disk('public')->exists($lembaga->logo)) {

            Storage::disk('public')->delete($lembaga->logo);
        }

        $lembaga->delete();

        return redirect()
            ->route('admin.lembaga.index')
            ->with('success', 'Data lembaga berhasil dihapus.');
    }
}
