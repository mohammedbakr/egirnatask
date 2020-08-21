<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $persons = Storage::disk('public')->get('person.json');
        $persons = json_decode($persons, true);

        $cities = Storage::disk('public')->get('city.json');
        $cities = json_decode($cities, true);

        $mix = array_merge($persons, $cities);


        return view('home', compact('persons', 'cities'));
    }
}
