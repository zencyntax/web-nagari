<?php

namespace App\Http\Controllers;

use App\Data\UmkmData;

class UmkmController extends Controller
{
    public function index()
    {
        return view('pages.umkm', [
            'hero'  => UmkmData::hero(),
            'about' => UmkmData::about(),
            'umkms' => UmkmData::umkms(),
            'join'  => UmkmData::join(),
            'cta'   => UmkmData::cta(),
        ]);
    }

    public function show($slug)
    {
        $details = UmkmData::details();

        abort_unless(isset($details[$slug]), 404);

        return view('pages.umkm-detail', [
            'umkm' => $details[$slug],
        ]);
    }
}
