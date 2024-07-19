<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slogan;
use App\Models\Testimonial;
use App\Models\Agency;
use App\Models\Carousels;
use App\Models\Permis;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{
    //
    public function index()
    {
        $slogans = Slogan::all();
        $testimonials = Testimonial::all();
        $agencies = Agency::all();
        $carousels = Carousels::all();
        $permis = Permis::all();

        return view('dashboard.index', compact('permis', 'slogans', 'testimonials', 'agencies', 'carousels'));
    }

    //crud pour le slogan

    public function createSlogan()
    {
        return view('home.slogans.create');
    }

    public function storeSlogan(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data['image'] = $request->file('image')->store('slogans', 'public');

        Slogan::create($data);

        return redirect()->route('dashboard')->with('success', 'Slogan ajouté avec succès');
    }

    public function editSlogan(Slogan $slogan)
    {
        return view('home.slogans.edit', compact('slogan'));
    }

    public function updateSlogan(Request $request, Slogan $slogan)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($slogan->image);
            $data['image'] = $request->file('image')->store('slogans', 'public');
        }

        $slogan->update($data);

        return redirect()->route('dashboard')->with('success', 'Slogan mis à jour avec succès');
    }

    public function destroySlogan(Slogan $slogan)
    {
        Storage::disk('public')->delete($slogan->image);
        $slogan->delete();

        return redirect()->route('dashboard')->with('success', 'Slogan supprimé avec succès');
    }

// Agencies

public function createAgency()
{
    return view('home.agencies.create');
}

public function storeAgency(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:25',
        'address' => 'required|string',
        'phone' => 'required|numeric',
    ]);

    Agency::create($data);

    return redirect()->route('dashboard')->with('success', 'Agence ajoutée avec succès');
}

public function editAgency(Agency $agency)
{
    return view('home.agencies.edit', compact('agency'));
}

public function updateAgency(Request $request, Agency $agency)
{
    $data = $request->validate([
        'name' => 'required|string|max:25',
        'address' => 'required|string',
        'phone' => 'required|numeric',
    ]);

    $agency->update($data);

    return redirect()->route('dashboard')->with('success', 'Agence mise à jour avec succès');
}

public function destroyAgency(Agency $agency)
{
    $agency->delete();

    return redirect()->route('dashboard')->with('success', 'Agence supprimée avec succès');
}

 //crud pour le temoignage

 public function createTestimonial()
 {
     return view('home.testimonials.create');
 }

 public function storeTestimonial(Request $request)
 {
     $data = $request->validate([
         'author' => 'required|string|max:255',
         'content' => 'required|string',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     ]);

     $data['image'] = $request->file('image')->store('testimonial', 'public');

     Testimonial::create($data);

     return redirect()->route('dashboard')->with('success', 'Temoignage ajouté avec succès');
 }

 public function editTestimonial(Testimonial $testimonial)
 {
     return view('home.testimonials.edit', compact('testimonial'));
 }

 public function updateTestimonial(Request $request, Testimonial $testimonial)
 {
     $data = $request->validate([
         'author' => 'required|string|max:255',
         'content' => 'required|string',
         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     ]);

     if ($request->hasFile('image')) {
         Storage::disk('public')->delete($testimonial->image);
         $data['image'] = $request->file('image')->store('testimonial', 'public');
     }

     $testimonial->update($data);

     return redirect()->route('dashboard')->with('success', 'Temoignage mis à jour avec succès');
 }

 public function destroyTestimonial(Testimonial $testimonial)
 {
     Storage::disk('public')->delete($testimonial->image);
     $testimonial->delete();

     return redirect()->route('dashboard')->with('success', 'Temoignage supprimé avec succès');
 }


 // carousel
 
 public function createCarousel()
 {
     return view('home.carousels.create');
 }

 public function storeCarousel(Request $request)
 {
     $data = $request->validate([
         'title' => 'required|string|max:255',
         'description' => 'required|string',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     ]);

     $data['image'] = $request->file('image')->store('carousels', 'public');

     Carousels::create($data);

     return redirect()->route('dashboard')->with('success', 'Carousel ajouté avec succès');
 }

 public function editCarousel(Carousels $carousel)
 {
     return view('home.carousels.edit', compact('carousel'));
 }

 public function updateCarousel(Request $request, Carousels $carousel)
 {
     $data = $request->validate([
         'title' => 'required|string|max:255',
         'description' => 'required|string',
         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     ]);

     if ($request->hasFile('image')) {
         Storage::disk('public')->delete($carousel->image);
         $data['image'] = $request->file('image')->store('carousel', 'public');
     }

     $carousel->update($data);

     return redirect()->route('dashboard')->with('success', 'Carousel mis à jour avec succès');
 }

 public function destroyCarousel(Carousels $carousel)
 {
     Storage::disk('public')->delete($carousel->image);
     $carousel->delete();

     return redirect()->route('dashboard')->with('success', 'Slogan supprimé avec succès');
 }

 public function createPermis()
 {
     return view('home.permis.create');
 }

 

 public function storePermis(Request $request)
 {
     $request->validate([
         'categorie' => 'required',
         'description' => 'required',
     ]);

     Permis::create($request->all());

     return redirect()->route('dashboard')
         ->with('success', 'Permis de conduire créé avec succès.');
 }

//  public function showPermis(Permis  $permis )
//  {
//      return view('dashboard', compact('permis '));
//  }

 public function editPermis(Permis  $permis )
 {
     return view('home.permis.edit', compact('permis'));
 }

 public function updatePermis(Request $request, Permis  $permis)
 {
     $request->validate([
         'categorie' => 'required',
         'description' => 'required',
     ]);

     $permis ->update($request->all());

     return redirect()->route('dashboard')
         ->with('success', 'Permis de conduire mis à jour avec succès.');
 }

 public function destroyPermis(Permis  $permis )
 {
     $permis ->delete();

     return redirect()->route('dashboard')
         ->with('success', 'Permis de conduire supprimé avec succès.');
 }

}
