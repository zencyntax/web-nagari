<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);

        return view('admin.berita.index', compact('news'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(StoreNewsRequest $request)
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
                ->store('news', 'public');

        }

        /*
        |--------------------------------------------------------------------------
        | Generate Slug
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug($data['title']);
        $originalSlug = $slug;
        $i = 1;

        while (News::where('slug', $slug)->exists()) {

            $slug = $originalSlug . '-' . $i;

            $i++;
        }

        $data['slug'] = $slug;

        /*
        |--------------------------------------------------------------------------
        | Published At
        |--------------------------------------------------------------------------
        */

        $data['published_at'] = $data['status'] === 'Publish'
            ? now()
            : null;

        /*
        |--------------------------------------------------------------------------
        | Simpan Data
        |--------------------------------------------------------------------------
        */

        News::create($data);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    public function show(News $beritum)
    {
        abort(404);
    }

    public function edit(News $beritum)
    {
        $news = $beritum;

        return view(
            'admin.berita.edit',
            compact('news')
        );
    }

    public function update(UpdateNewsRequest $request, News $beritum)
    {
        $data = $request->validated();

        /*
        |--------------------------------------------------------------------------
        | Upload Thumbnail Baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('thumbnail')) {

            if (
                $beritum->thumbnail &&
                Storage::disk('public')->exists($beritum->thumbnail)
            ) {

                Storage::disk('public')->delete($beritum->thumbnail);

            }

            $data['thumbnail'] = $request
                ->file('thumbnail')
                ->store('news', 'public');

        } else {

            $data['thumbnail'] = $beritum->thumbnail;

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
            News::where('slug', $slug)
                ->where('id', '!=', $beritum->id)
                ->exists()
        ) {

            $slug = $originalSlug . '-' . $i;

            $i++;

        }

        $data['slug'] = $slug;

        /*
        |--------------------------------------------------------------------------
        | Published At
        |--------------------------------------------------------------------------
        */

        $data['published_at'] = $data['status'] === 'Publish'
            ? ($beritum->published_at ?? now())
            : null;

        /*
        |--------------------------------------------------------------------------
        | Update Data
        |--------------------------------------------------------------------------
        */

        $beritum->update($data);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(News $beritum)
    {
        /*
        |--------------------------------------------------------------------------
        | Hapus Thumbnail
        |--------------------------------------------------------------------------
        */

        if (
            $beritum->thumbnail &&
            Storage::disk('public')->exists($beritum->thumbnail)
        ) {

            Storage::disk('public')->delete($beritum->thumbnail);

        }

        /*
        |--------------------------------------------------------------------------
        | Hapus Data
        |--------------------------------------------------------------------------
        */

        $beritum->delete();

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus.');
    }
}
