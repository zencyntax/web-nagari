<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAgendaRequest;
use App\Http\Requests\UpdateAgendaRequest;
use App\Models\Agenda;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::latest()->paginate(10);

        return view('admin.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(StoreAgendaRequest $request)
    {
        $data = $request->validated();

        /*
        |--------------------------------------------------------------------------
        | Upload Thumbnail
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('thumbnail')) {

            $data['thumbnail'] = $request
                ->file('thumbnail')
                ->store('agenda', 'public');

        }

        /*
        |--------------------------------------------------------------------------
        | Generate Slug
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug($data['title']);

        $originalSlug = $slug;

        $i = 1;

        while (Agenda::where('slug', $slug)->exists()) {

            $slug = $originalSlug . '-' . $i;

            $i++;

        }

        $data['slug'] = $slug;

        /*
        |--------------------------------------------------------------------------
        | Simpan Data
        |--------------------------------------------------------------------------
        */

        Agenda::create($data);

        return redirect()
            ->route('admin.agenda.index')
            ->with('success', 'Agenda berhasil ditambahkan.');
    }

    public function show(Agenda $agenda)
    {
        abort(404);
    }

    public function edit(Agenda $agenda)
    {
        return view(
            'admin.agenda.edit',
            compact('agenda')
        );
    }

    public function update(UpdateAgendaRequest $request, Agenda $agenda)
    {
        $data = $request->validated();

        /*
        |--------------------------------------------------------------------------
        | Upload Thumbnail
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('thumbnail')) {

            if (

                $agenda->thumbnail &&

                Storage::disk('public')->exists($agenda->thumbnail)

            ) {

                Storage::disk('public')->delete($agenda->thumbnail);

            }

            $data['thumbnail'] = $request
                ->file('thumbnail')
                ->store('agenda', 'public');

        } else {

            $data['thumbnail'] = $agenda->thumbnail;

        }

        /*
        |--------------------------------------------------------------------------
        | Generate Slug
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug($data['title']);

        $originalSlug = $slug;

        $i = 1;

        while (

            Agenda::where('slug', $slug)

                ->where('id', '!=', $agenda->id)

                ->exists()

        ) {

            $slug = $originalSlug . '-' . $i;

            $i++;

        }

        $data['slug'] = $slug;

        /*
        |--------------------------------------------------------------------------
        | Update Data
        |--------------------------------------------------------------------------
        */

        $agenda->update($data);

        return redirect()
            ->route('admin.agenda.index')
            ->with('success', 'Agenda berhasil diperbarui.');
    }

    public function destroy(Agenda $agenda)
    {
        if (

            $agenda->thumbnail &&

            Storage::disk('public')->exists($agenda->thumbnail)

        ) {

            Storage::disk('public')->delete($agenda->thumbnail);

        }

        $agenda->delete();

        return redirect()
            ->route('admin.agenda.index')
            ->with('success', 'Agenda berhasil dihapus.');
    }
}
