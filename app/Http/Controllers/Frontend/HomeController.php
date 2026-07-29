<?php

namespace App\Http\Controllers\Frontend;

use App\Data\HomeData;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('pages.home', [
            'hero' => HomeData::hero(),
            'about' => HomeData::about(),
            'services' => HomeData::services(),
            'statistics' => HomeData::statistics(),
            'cta' => HomeData::cta(),
        ]);
    }
}
