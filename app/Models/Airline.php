<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'country',
    ];

    public function countryRelation(){
     return ($this->belongsTo(Country::class, 'country', 'title'));
      }

      public function airportRelation(){
        return ($this->hasMany(Airport::class, 'airline', 'title'));
        }

}
