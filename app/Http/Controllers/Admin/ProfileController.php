<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::firstOrCreate(
            ['id' => 1],
            []
        );

        $missions = $profile
    ->missions()
    ->orderBy('urutan')
    ->get();

    $jorongs = $profile
    ->jorongs()
    ->orderBy('urutan')
    ->get();

return view(
    'admin.profile.edit',
    compact(
        'profile',
        'missions',
        'jorongs'
    )
);
    }

   public function update(UpdateProfileRequest $request)
{
    $profile = Profile::firstOrCreate(
        ['id' => 1],
        []
    );

    $data = $request->validated();

    /*
|--------------------------------------------------------------------------
| Google Maps Embed
|--------------------------------------------------------------------------
*/

if (!empty($data['peta'])) {

    preg_match('/src="([^"]+)"/', $data['peta'], $matches);

    if (!empty($matches[1])) {

        $data['peta'] = $matches[1];

    }

}

    /*
    |--------------------------------------------------------------------------
    | Upload Foto Wali
    |--------------------------------------------------------------------------
    */

    if ($request->hasFile('foto_wali')) {

        if (
            $profile->foto_wali &&
            Storage::disk('public')->exists($profile->foto_wali)
        ) {
            Storage::disk('public')->delete($profile->foto_wali);
        }

        $data['foto_wali'] = $request
            ->file('foto_wali')
            ->store('profile', 'public');
    }

    /*
    |--------------------------------------------------------------------------
    | Simpan Data
    |--------------------------------------------------------------------------
    */

    $profile->update($data);

    return redirect()
        ->route('admin.profile.edit')
        ->with(
            'success',
            'Profil Nagari berhasil diperbarui.'
        );
}
}
