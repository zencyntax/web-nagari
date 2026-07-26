<?php

namespace App\Http\Controllers;

use App\Data\AgendaData;
use Illuminate\View\View;

class AgendaController extends Controller
{
    public function index(): View
    {
        return view('pages.agenda', [
            'hero' => AgendaData::hero(),
            'featured' => AgendaData::featured(),
            'agendas' => AgendaData::agendas(),
        ]);
    }

    public function show(string $slug): View
    {
        $details = AgendaData::details();

        abort_unless(isset($details[$slug]), 404);

        return view('pages.agenda-detail', [
            'agenda' => $details[$slug],
        ]);
    }
}
