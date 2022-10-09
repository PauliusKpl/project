<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Airport;
use App\Models\Country;
use App\Models\Airline;

class CountryController extends Controller
{

    public function index(Request $request){
       $countries = Country::all();

       if($request->filter == 'withoutAirline'){
        $countries = Country::doesnthave('airlineRelation')->get();
      }
      if($request->filter == 'withoutAirlineAndAirport'){
        $countries = Country::doesnthave('airlineRelation')->doesnthave('airportRelation')->get();
      }

      $noresults = null;
      if($countries->count() == 0 && $request->filter != null){$noresults = 'No results found.';}

        return view('countries.index', ['countries' => $countries, 'noresults' => $noresults]);
      }

      public function create(){
        return view('countries.createCountry');
       }

       public function store(Request $request){
        $input = $request->validate([
          'title' => 'required',
          'iso_code' => 'required'
        ]);
        Country::create($input);
        return redirect(route('countries'));
       }

       public function edit($id){
        $country = Country::find($id);
        return view('countries.editCountry', ['id' => $id, 'country' => $country]);
       }

       public function update(Request $request, $id){

        $input = $request->validate([
          'title' => 'required',
          'iso_code' => 'required'
        ]);

        $edit = Country::find($id);
        $edit->title = $input['title'];
        $edit->iso_code = $input['iso_code'];
        $edit->save();
        return redirect(route('countries'));
       }

       public function delete($id){
        $country = Country::find($id);
        return view('countries.removeCountry', ['id' => $id, 'country' => $country]);
       }

       public function remove($id){
        Country::find($id)->delete();
        return redirect(route('countries'));
      }
}
