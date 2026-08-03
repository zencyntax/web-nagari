<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateSettingRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first();

        if (!$setting) {

            $setting = Setting::create([
                'nama_website' => '',
                'nama_nagari'  => '',
            ]);

        }

        return view('admin.setting.edit', compact('setting'));
    }

    public function update(UpdateSettingRequest $request)
    {
        $setting = Setting::firstOrFail();

        $data = $request->validated();

        /*
        |--------------------------------------------------------------------------
        | Logo
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('logo')) {

            if ($setting->logo && Storage::disk('public')->exists($setting->logo)) {

                Storage::disk('public')->delete($setting->logo);

            }

            $data['logo'] = $request->file('logo')
                ->store('setting/logo', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Favicon
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('favicon')) {

            if ($setting->favicon && Storage::disk('public')->exists($setting->favicon)) {

                Storage::disk('public')->delete($setting->favicon);

            }

            $data['favicon'] = $request->file('favicon')
                ->store('setting/favicon', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Hero
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('hero')) {

            if ($setting->hero && Storage::disk('public')->exists($setting->hero)) {

                Storage::disk('public')->delete($setting->hero);

            }

            $data['hero'] = $request->file('hero')
                ->store('setting/hero', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Open Graph Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('og_image')) {

            if ($setting->og_image && Storage::disk('public')->exists($setting->og_image)) {

                Storage::disk('public')->delete($setting->og_image);

            }

            $data['og_image'] = $request->file('og_image')
                ->store('setting/og-image', 'public');
        }

        $setting->update($data);

        return redirect()
            ->route('admin.setting.edit')
            ->with('success', 'Pengaturan website berhasil diperbarui.');
    }
}
