<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Beer;

class BaseController extends Controller
{
  public function test() {

    // $beers = Beer::all();

    //   return view('home', ['beers' => $beers]);


    $beers = Beer::where('price', '!=', '2.50')->get();
    // dd($b);

    return view('test', compact('beers'));
}
};
