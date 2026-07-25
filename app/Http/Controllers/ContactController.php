<?php

namespace App\Http\Controllers;

use App\Data\ContactData;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact', [
            'hero'            => ContactData::hero(),
            'contactPersons'  => ContactData::contactPersons(),
            'form'            => ContactData::form(),
            'faq'             => ContactData::faq(),
            'cta'             => ContactData::cta(),
        ]);
    }
}
