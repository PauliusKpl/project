<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirlineController extends Controller
{
    public function index(){
        return view('airlines.index');
      }

      public function create(){
        return view('airlines.createAirline');
       }
}
