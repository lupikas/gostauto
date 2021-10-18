<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Artesaos\SEOTools\Traits\SEOTools;

class PriceController extends Controller
{
    use SEOTools;

    public function index()
    {
        $this->seo()->setTitle(__('Kainos'));

        $procedures = Procedure::all();

        return view('prices.index', [
            'procedures' => $procedures,
        ]);
    }
}
