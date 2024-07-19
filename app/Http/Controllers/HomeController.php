<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slogan;
use App\Models\Testimonial;
use App\Models\Agency;
use App\Models\Carousels;
use App\Models\Permis;
class HomeController extends Controller
{
    public function index()
    {
        $slogans = Slogan::all();
        $testimonials = Testimonial::all();
        $agencies = Agency::all();
        $carousels = Carousels::all();
        $permis = Permis::all();
        $categories = Permis::select('categorie')->distinct()->pluck('categorie');

        return view('template.index', compact('slogans', 'categories', 'testimonials', 'agencies', 'carousels', 'permis'));
    }
    
    public function about()
    {     
       $agencies = Agency::all();

       return view ('template.about', compact('agencies'));
    }

    public function service()
    {     
       $agencies = Agency::all();
       $permis = Permis::all();
       $categories = Permis::select('categorie')->distinct()->pluck('categorie');

       return view ('template.service', compact('agencies', 'categories','permis'));
    }
}
