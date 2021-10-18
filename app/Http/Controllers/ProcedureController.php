<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Procedure;
use Artesaos\SEOTools\Traits\SEOTools;

class ProcedureController extends Controller
{
    use SEOTools;

    public function index()
    {
        $this->seo()->setTitle(__('Paslaugos'));

        $procedures = Procedure::all();

        return view('procedures.index', [
            'procedures' => $procedures,
        ]);
    }

    public function show(Procedure $procedure)
    {
        $this->seo()->setTitle($procedure->title);

        $doctors = $procedure->doctors()->limit(4)->orderBy('sort_order')->get();

        return view('procedures.show', [
            'procedure' => $procedure,
            'doctors' => $doctors,
        ]);
    }
}
