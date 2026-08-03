<?php

namespace App\Http\Controllers\Frontend;

use App\Data\ContactData;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

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
