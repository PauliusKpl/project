<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Airport;
use App\Models\Country;
use App\Models\Airline;

class AirportController extends Controller
{

    public function index(Request $request){

     //   $airports = Airport::all();
     
     Airport::doesnthave('countryRelation')->delete();
     $airports = Airport::has('countryRelation')->get();


     if($request->country == 'Search by country') $request->country = '';

        if($request->country != null){$airports = Airport::where('country', 'LIKE', '%'.$request->country.'%')->get();}
        
        $noresults = null;
        if($airports->count() == 0 && $request->country != null){$noresults = 'No results found.';}
    
      
      $countries = Country::all();
      return view('airports.index', ['airports' => $airports, 'countries' => $countries, 'noresults' => $noresults, 'request' => $request->country]);
    }

    public function create(){
      $countries = Country::all();

     return view('airports.createAirport', ['countries' => $countries]);
    }

    public function store(Request $request){
      $input = $request->validate([
       'title' => 'required',
       'country' => 'required',
       'location' => 'required'
      ]);
      Airport::create($input);
   //   $new = new Airport;
   //   $new->title = $request->title;
   //   $new->country = $request->country;
   //   $new->location = $request->location;
    //  $new->save();
      return(redirect(route('airports')));
    }

    public function addAirline($id){
      $airport = Airport::find($id);
      $airlines = Airline::all();
      return view('airports.addAirline', ['airlines' => $airlines, 'id' => $id, 'airport' => $airport]);
    }

    public function storeAirline(Request $request, $id){
      $input = $request->validate([
        'airline' => 'required',
       ]);

      $airport = Airport::find($id);
      $airport->airline = $airport->airline . ', ' . $input['airline'];
      $airport->save();
      return redirect(route('airports'));
    }

    public function unlinkAirline($id){
      $airport = Airport::find($id);
      $airlines = explode(',', $airport->airline);
      
      return view('airports.unlinkAirline', ['airlines' => $airlines, 'id' => $id, 'airport' => $airport]);
    }

    public function edit($id){
      $airport = Airport::find($id);
      $countries = Country::all();
     return view('airports.editAirport', ['id' => $id, 'countries' => $countries, 'airport' => $airport]);
    }

    public function update(Request $request, $id){
     $input = $request->validate([
       'title' => 'required',
       'country' => 'required',
       'location' => 'required'
     ]);
     
     $edit = Airport::find($id);
     $edit->title = $input['title'];
     $edit->country = $input['country'];
     $edit->location = $input['location'];
     $edit->save();
     return redirect(route('airports'));
    }

    public function delete($id){
      $airport = Airport::find($id);
      return view('airports.removeAirport', ['id' => $id, 'airport' => $airport]);
    }

    public function remove($id){
      Airport::find($id)->delete();
      return redirect(route('airports'));
    }

}
