<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'type',
        'languages',
        'level',
        'completed',
        'cover_img',
        'description',
        'github_link',
    ];


public function type(){
    retutn $this->belongsTo(Type::class);
}
public function level(){
    retutn $this->belongsTo(Level::class);
}


}
