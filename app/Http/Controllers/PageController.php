<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Traits\SEOTools;

class PageController extends Controller
{
    use SEOTools;

    public function showContacts()
    {
        $this->seo()->setTitle(__('Kontaktai'));

        return view('pages.contacts');
    }

    public function showPrivacyPolicy()
    {
        $this->seo()->setTitle(__('Privatumo politika'));

        return view('pages.privacy-policy');
    }
}
