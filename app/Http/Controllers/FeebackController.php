<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Artesaos\SEOTools\Traits\SEOTools;

class FeebackController extends Controller
{
    use SEOTools;

    public function index()
    {
        $this->seo()->setTitle(__('Atsiliepimai'));

        $feedback = Feedback::orderBy('sort_order')->paginate(12);

        return view('feedback.index', [
            'feedback' => $feedback,
        ]);
    }
}
