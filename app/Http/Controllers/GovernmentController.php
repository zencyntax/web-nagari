<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    public function index()
    {
        return view('pages.government');
    }
}
