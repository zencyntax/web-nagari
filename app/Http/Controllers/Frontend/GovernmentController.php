<?php

namespace App\Http\Controllers\Frontend;

use App\Data\GovernmentData;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class GovernmentController extends Controller
{
    /**
     * Menampilkan halaman Pemerintahan Nagari.
     */
    public function index(): View
    {
        return view('pages.government', [
            'leader' => GovernmentData::leader(),
            'secretary' => GovernmentData::secretary(),
            'staff' => GovernmentData::staff(),
            'institutions' => GovernmentData::institutions(),
        ]);
    }
}
