<?php

namespace App\Http\Controllers;

use App\Models\Path;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\For_;

class PathController extends Controller
{

    /* :::::::::::::::::::::::::::::::::::::::::::::::::: */

    public function uploadWorldMap(Request $request)
    {
        /* multiple try **************************************************/
        $paths = $request->json()->all();
        $i = 0;
        foreach ($paths as $path) {
            $i++;
    
                $newPath = new Path([
                    'title' => $path['title'],
                    'code' => $path['id'],
                    'path' => $path['d']
                ]);
                $newPath->save(); 
        }

        /* ORO**************************************************/
        /*       $path = $request->json()->all();
        $newPath = new Path([
        'title' => $path['title'],
        'code' => $path['id'],
        'path' => $path['d']
        ]);
        $newPath->save(); */

        /***************************************************/
    }
}