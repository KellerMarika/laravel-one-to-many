<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
     
        'type',
        'level',
        'languages',

        'title',
        'completed',
        'cover_img',
        'description',
        'github_link',
    ];


public function type(){
    return $this->belongsTo(Type::class);
}
public function level(){
    return $this->belongsTo(Level::class);
}


}
