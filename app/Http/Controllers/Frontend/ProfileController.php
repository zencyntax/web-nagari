<?php

namespace App\Http\Controllers\Frontend;

use App\Data\ProfileData;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('pages.profile', [
            'hero'       => ProfileData::hero(),
            'welcome'    => ProfileData::welcome(),
            'history'    => ProfileData::history(),
            'vision'     => ProfileData::vision(),
            'missions'   => ProfileData::missions(),
            'demography' => ProfileData::demography(),
            'geography'  => ProfileData::geography(),
            'cta'        => ProfileData::cta(),
        ]);
    }
}
