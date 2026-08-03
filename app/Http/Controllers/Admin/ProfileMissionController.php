<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileMissionRequest;
use App\Http\Requests\UpdateProfileMissionRequest;
use App\Models\Profile;
use App\Models\ProfileMission;

class ProfileMissionController extends Controller
{
    public function store(StoreProfileMissionRequest $request)
    {
        $profile = Profile::firstOrCreate(['id' => 1]);

        $profile->missions()->create($request->validated());

        return back()->with('success', 'Misi berhasil ditambahkan.');
    }

    public function update(
        UpdateProfileMissionRequest $request,
        ProfileMission $mission
    ) {

        $mission->update($request->validated());

        return back()->with('success', 'Misi berhasil diperbarui.');
    }

    public function destroy(ProfileMission $mission)
    {
        $mission->delete();

        return back()->with('success', 'Misi berhasil dihapus.');
    }
}
