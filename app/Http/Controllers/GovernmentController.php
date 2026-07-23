<?php

namespace App\Http\Controllers;

use App\Data\GovernmentData;

class GovernmentController extends Controller
{
    /**
     * Menampilkan halaman Pemerintahan Nagari.
     */
    public function index()
    {
        return view('pages.government', [
            'leader'       => GovernmentData::leader(),
            'secretary'    => GovernmentData::secretary(),
            'staff'        => GovernmentData::staff(),
            'institutions' => GovernmentData::institutions(),
        ]);
    }
}
