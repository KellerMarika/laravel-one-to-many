<?php

namespace App\Http\Controllers;

use App\Models\Path;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\For_;

class PathController extends Controller
{

    /* :::::::::::::::::::::::::::::::::::::::::::::::::: */

    public function uploadWorldMap(Request $request)
    {
        /* multiple try **************************************************/
        $paths = $request->json()->all();

       //tocca ricodificarlo per creare un file.json e salvarlo in storage
        $path = Storage::put("worldPaths.json",  json_encode($paths));

        //echo count($paths); //ne passa 250 ma n eprocessa max 37
       // $i = 0;
     /*    foreach ($paths as $path) {
            $i++;
    
                $newPath = new Path([
                    'title' => $path['title'],
                    'code' => $path['id'],
                    'path' => $path['d']
                ]);
                $newPath->save(); 
        } */
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