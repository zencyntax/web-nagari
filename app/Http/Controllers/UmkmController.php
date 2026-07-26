<?php

namespace App\Http\Controllers;

use App\Data\UmkmData;
use Illuminate\View\View;

class UmkmController extends Controller
{
    public function index(): View
    {
        return view('pages.umkm', [
            'hero'  => UmkmData::hero(),
            'about' => UmkmData::about(),
            'umkms' => UmkmData::umkms(),
            'join'  => UmkmData::join(),
            'cta'   => UmkmData::cta(),
        ]);
    }

    public function show(string $slug): View
    {
        $details = UmkmData::details();

        abort_unless(isset($details[$slug]), 404);

        return view('pages.umkm-detail', [
            'umkm' => $details[$slug],
        ]);
    }
}
