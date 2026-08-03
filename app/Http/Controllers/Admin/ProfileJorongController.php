<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\ProfileJorong;
use Illuminate\Http\Request;

class ProfileJorongController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|max:255',
    ]);

    $profile = Profile::first();

    ProfileJorong::create([
        'profile_id' => $profile->id,
        'nama' => $request->nama,
        'urutan' => ProfileJorong::count() + 1,
    ]);

    return back()->with('success', 'Jorong berhasil ditambahkan.');
}

    public function update(Request $request, ProfileJorong $jorong)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        $jorong->update([
            'nama' => $request->nama,
        ]);

        return back()->with('success', 'Jorong berhasil diperbarui.');
    }

    public function destroy(ProfileJorong $jorong)
    {
        $jorong->delete();

        return back()->with('success', 'Jorong berhasil dihapus.');
    }
}
