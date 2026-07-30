<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUmkmGalleryRequest;
use App\Http\Requests\Admin\UpdateUmkmGalleryRequest;
use App\Models\Umkm;
use App\Models\UmkmGallery;
use Illuminate\Support\Facades\Storage;

class UmkmGalleryController extends Controller
{
    /**
     * Upload gallery.
     */
    public function store(StoreUmkmGalleryRequest $request, Umkm $umkm)
    {
        foreach ($request->file('foto') as $foto) {

            $path = $foto->store('umkm/gallery', 'public');

            $umkm->galleries()->create([
                'judul' => $request->judul,
                'foto' => $path,
                'urutan' => $request->urutan ?? 1,
            ]);
        }

        return back()->with(
            'success',
            'Galeri berhasil ditambahkan.'
        );
    }

    /**
     * Update gallery.
     */
    public function update(
        UpdateUmkmGalleryRequest $request,
        UmkmGallery $gallery
    ) {

        $data = [

            'judul' => $request->judul,

            'urutan' => $request->urutan ?? 1,

        ];

        if ($request->hasFile('foto')) {

            if (
                $gallery->foto &&
                Storage::disk('public')->exists($gallery->foto)
            ) {
                Storage::disk('public')->delete($gallery->foto);
            }

            $data['foto'] = $request
                ->file('foto')
                ->store('umkm/gallery', 'public');
        }

        $gallery->update($data);

        return back()->with(
            'success',
            'Galeri berhasil diperbarui.'
        );
    }

    /**
     * Delete gallery.
     */
    public function destroy(UmkmGallery $gallery)
    {

        if (
            $gallery->foto &&
            Storage::disk('public')->exists($gallery->foto)
        ) {
            Storage::disk('public')->delete($gallery->foto);
        }

        $gallery->delete();

        return back()->with(
            'success',
            'Galeri berhasil dihapus.'
        );
    }
}
