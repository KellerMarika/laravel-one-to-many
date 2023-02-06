<?php

namespace App\Models;

use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Type extends Model
{
    use HasFactory;


    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}