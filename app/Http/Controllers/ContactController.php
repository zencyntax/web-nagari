<?php

namespace App\Http\Controllers;

use App\Data\ContactData;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('pages.contact', [
            'hero' => ContactData::hero(),
            'contactPersons' => ContactData::contactPersons(),
            'form' => ContactData::form(),
            'faq' => ContactData::faq(),
            'cta' => ContactData::cta(),
        ]);
    }
}
