<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Airport;
use App\Models\Country;
use App\Models\Airline;

class AirlineController extends Controller
{
    public function index(){
     // $airlines = Airline::all();

     Airline::doesnthave('countryRelation')->delete();
     $airlines = Airline::has('countryRelation')->get();
     $countries = Country::all();

        return view('airlines.index', ['airlines' => $airlines, 'countries' => $countries]);
      }

      public function create(){
        $countries = Country::all();
        return view('airlines.createAirline', ['countries' => $countries]);
       }

       public function store(Request $request){
        $input = $request->validate([
          'title' => 'required',
          'country' => 'required'
        ]);
        Airline::create($input);
        return redirect(route('airlines'));
      }

      public function edit($id){
        $airline = Airline::find($id);
        $countries = Country::all();
        return view('airlines.editAirline', ['id' => $id, 'countries' => $countries, 'airline' => $airline]);
       }

       public function update(Request $request, $id){

        $input = $request->validate([
          'title' => 'required',
          'country' => 'required'
        ]);

        $edit = Airline::find($id);
        $edit->title = $input['title'];
        $edit->country = $input['country'];
        $edit->save();
        return redirect(route('airlines'));
       }

       public function delete($id){
        $airline = Airline::find($id);
        return view('airlines.removeAirline', ['id' => $id, 'airline' => $airline]);
       }

       public function remove($id){
        Airline::find($id)->delete();
        return redirect(route('airlines'));
      }
}
