<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
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