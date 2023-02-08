<?php

namespace Database\Seeders;

use App\Models\Path;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use File;

class PathsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $jsonPaths = Storage::get('worldPaths.json');
      /*   $jsonPaths = json_decode($jsonPaths, true);


        foreach ($jsonPaths as $path) {
            # code...
        } */

        $newPath = new Path([
            'title' => '1',
            'code' => '2',
            'path' => $jsonPaths 
        ]);
        $newPath->save();

        /*  foreach ($paths as $path) {
        $newPath = new Path([
        'title' => $path['title'],
        'code' => $path['id'],
        'path' => $path['d']
        ]);
        $newPath->save();
        } */
   } 
}