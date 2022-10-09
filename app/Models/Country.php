<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'iso_code'
    ];

    public function airlineRelation(){
        return ($this->hasMany(Airline::class, 'country', 'title'));
        }
    public function airportRelation(){
        return ($this->hasMany(Airport::class, 'country', 'title'));
        }
}
