<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Artesaos\SEOTools\Traits\SEOTools;

class RegisterController extends Controller
{
    use SEOTools;

    public function show()
    {
        $this->seo()->setTitle(__('Registracija vizitui'));

        $procedures = Procedure::all();

        return view('register', [
            'procedures' => $procedures,
        ]);
    }
}
