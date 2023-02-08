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
            if ($i===1){

                /* li vedo correttamente è la creazione della classe che non va */
               /*  echo $path['title'];
                echo $path['id'];
                echo $path['d']; */
                $newPath = new Path([
                    'title' => $path['title'],
                    'code' => $path['id'],
                    'path' => $path['d']
                ]);
                $newPath->save(); 
                echo $newPath

            }
            
           /*  $newPath = new Path([
                'title' => $path['title'],
                'code' => $path['id'],
                'path' => $path['d']
            ]);
            $newPath->save(); */
            # code...


        }
        /*  $newPath = new Path([
        'title' => $path['title'],
        'code' => $path['id'],
        'path' => $path['d']
        ]);
        $newPath->save(); */

        /***************************************************/

        /* ORO**************************************************/
        /*       $path = $request->json()->all();
        $newPath = new Path([
        'title' => $path['title'],
        'code' => $path['id'],
        'path' => $path['d']
        ]);
        $newPath->save(); */

        /***************************************************/

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


    }
}