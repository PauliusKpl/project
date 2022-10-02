<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index(){
      return view('airports.index');
    }

    public function create(){
     return view('airports.createAirport');
    }

}
