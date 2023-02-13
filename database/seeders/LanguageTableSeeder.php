<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            'html',
            'css',
            'sass',
            'javascript',
            'php'
        ];

        foreach ($languages as $language) {
            Language::create([
                'name'=> $language
            ]);
            # code...
        }
    }
}
