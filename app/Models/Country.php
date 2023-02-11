<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'official_name', //to drop
        'code_two', 
        'code_three', 
        'flag', 
        'continent_id', 
        'coordinates_id', 
        'capital_id',
        'path_id',

    ];
    
    public function path()
    {
        return $this->belongsTo(Paths::class);
    }
    public function coordinates()
    {
        return $this->belongsTo(Coordinates::class);
    }
    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }
    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    /* indico un nome diverso per la forein key */
    public function capital()
    {
        return $this->belongsTo(City::class, "capital_id");
    }
}