<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index() {
        // $beers = Beer::all();
        // // return view('home', ['beers' => $beers]);
        // return view(compact('beers'));

        $b = Beer::where('price', '2.50')->get();
        $b = Beer::where('price', '!=', '2.50')->get();
        dd($b);
    }
}
