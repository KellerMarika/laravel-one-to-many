<?php

namespace App\Models;

use Faker\Core\Coordinates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;

    public function coordinates(){
       return $this->belongsTo(Coordinates::class); 
    }
    public function countries(){
        return  $this->hasMany(Country::class); 
    }
    
}
