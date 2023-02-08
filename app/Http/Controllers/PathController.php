<?php

namespace App\Http\Controllers;

use App\Models\Path;
use Illuminate\Http\Request;

class PathController extends Controller
{

    /* :::::::::::::::::::::::::::::::::::::::::::::::::: */

    public function uploadWorldMap(Request $request)
    {

        $paths_a = $request->json();
        $paths_b = $request->json()->all();

        $newPath = new Path([
            'title' => $request->json('title'),
            'code' => $request->json('id'),
            'path' => $request->json('d')
            ]);
            $newPath->save();

        /*    $paths = Path::create($request->all()); */
        /*      foreach ($paths_a as $path) {
        $newPath = new Path([
        'title' => $path['title'],
        'code' => $path['id'],
        'path' => $path['d']
        ]);
        $newPath->save();
        }
        */

        /*         return $paths; */
    }

    /* :::::::::::::::::::::::::::::::::::::::::::::::::: */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }


}