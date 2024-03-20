<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Home_carousels;
use App\Models\VisasTypes;
use Illuminate\Http\Request;
use App\Models\Visas;

class HomeController extends Controller
{
    protected $visas;
    public function index()
    {
        $visas = Visas::all(); 
        $visasType = VisasTypes::all(); 
        $home_carousels = Home_carousels::all();
        //$this->visas = new Visas();
        return view('pages.home.index', ['visas' => $visas,'visa_types' => $visasType,'home_carousels' => $home_carousels]); // Passing posts data to the view
    }

    public function visaApplication(Request $request, $visa_id)
    {
        $visas = Visas::find($request->visa_id);
        return view('pages.application.index', ['visas' => $visas]);
    } 
    
}
