<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
  public function index() {
      $beers = Beer::all();

      return view(compact('beers'));
}
};
