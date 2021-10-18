<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Post;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    use SEOTools;

    public function index()
    {
        $this->seo()->setTitle(__('Gydytojai'));

        $doctors = Doctor::orderBy('sort_order')->get();
        //$pages = DB::table('nova_page_manager_pages')->get();
            
            
        return view('doctors.index', [
            'doctors' => $doctors,
            //'pages' => $pages,
            
        ]);
    }

    public function show(Doctor $doctor)
    {
        $this->seo()->setTitle($doctor->title);

        $doctors = Doctor::inRandomOrder()->limit(4)->get();
$posts = Post::inRandomOrder()->limit(3)->get();
        return view('doctors.show', [
            'doctor' => $doctor,
            'doctors' => $doctors,
            'posts' => $posts,
        ]);
    }

}
