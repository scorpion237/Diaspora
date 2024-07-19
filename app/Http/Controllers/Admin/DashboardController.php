<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Carousels;
use App\Models\Slogan;
use App\Models\Testimonial;
use App\Models\Agency;
use App\Models\Permis;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $carousels = Carousels::all();
        $slogans = Slogan::all();
        $testimonials = Testimonial::all();
        $agencies = Agency::all();
        $permis = Permis::all();

        return view('admin.dashboard.dashboard', compact('carousels', 'slogans', 'testimonials', 'agencies', 'permis'));
    }
}
