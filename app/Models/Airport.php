<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'country',
        'location',
        'airport',
    ];

    public function countryRelation(){
      return ($this->belongsTo(Country::class, 'country', 'title'));
      }

      public function airlineRelation(){
        return ($this->hasMany(Airline::class, 'title', 'airline'));
        }

}
