<?php

namespace App\Http\Controllers;

use App\Data\GovernmentData;
use Illuminate\View\View;

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
