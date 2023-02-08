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


        /*       $path = json_decode($request, true); */
        $path = $request->json()->all();
        /* sto passando un oggetto invece di un array */
        $newPath = new Path([
            'title' => $path['title'],
            'code' => $path['id'],
            'path' => $path['d']
        ]);
        $newPath->save();


        /* foreach ($paths_a as $path) {
        $newPath = new Path([
        'title' => $path['title'],
        'code' => $path['id'],
        'path' => $path['d']
        ]);
        $newPath->save(); */
        /*         return $paths; */

        /*  $newPath = new Path([
        'title' => $paths_a['title'],
        'code' => $paths_a['id'],
        'path' => $paths_a['d']
        ]);
        $newPath->save(); */





        /*$paths_a = $request->json()->all() valore 0 dell'array  */
        /*    $newPath = new Path([
        'title' => $paths_a['title'],
        'code' => $paths_a['id'],
        'path' => $paths_a['d']
        ]);
        $newPath->save(); */
        /*  } */



    }
}