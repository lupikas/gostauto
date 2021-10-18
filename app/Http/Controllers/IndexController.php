<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Feedback;
use App\Models\Post;
use App\Models\Procedure;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    use SEOTools;

    public function index()
    {
        $this->seo()->setTitle(__('Pagrindinis'));

        $doctors = Doctor::take(4)->get();
        $procedures = Procedure::all();
        $posts = Post::orderByDesc('updated_at')->take(3)->get();
        $feedback = Feedback::take(4)->get();
        $pages = DB::table('pages')->where('deleted_at', null)->get();

        return view ('index', [
            'doctors' => $doctors,
            'procedures' => $procedures,
            'posts' => $posts,
            'feedback' => $feedback,
            'pages' => $pages,
        ]);
       
    }
   
}