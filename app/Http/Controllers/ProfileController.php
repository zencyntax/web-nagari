<?php

namespace App\Http\Controllers;

use App\Data\ProfileData;
use Illuminate\View\View;

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
