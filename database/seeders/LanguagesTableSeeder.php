<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'language' => 'python',
                'created_at' => '2023-06-03 08:54:26',
                'updated_at' => '2023-06-03 08:54:26',
            ),
            1 => 
            array (
                'id' => 2,
                'language' => 'java',
                'created_at' => '2023-06-03 08:54:26',
                'updated_at' => '2023-06-03 08:54:26',
            ),
            2 => 
            array (
                'id' => 3,
                'language' => 'js',
                'created_at' => '2023-06-03 08:54:26',
                'updated_at' => '2023-06-03 08:54:26',
            ),
            3 => 
            array (
                'id' => 4,
                'language' => 'css',
                'created_at' => '2023-06-03 08:54:26',
                'updated_at' => '2023-06-03 08:54:26',
            ),
            4 => 
            array (
                'id' => 5,
                'language' => 'php',
                'created_at' => '2023-06-03 08:54:26',
                'updated_at' => '2023-06-03 08:54:26',
            ),
            5 => 
            array (
                'id' => 6,
                'language' => 'sql',
                'created_at' => '2023-06-03 08:54:26',
                'updated_at' => '2023-06-03 08:54:26',
            ),
            6 => 
            array (
                'id' => 7,
                'language' => 'laravel',
                'created_at' => '2023-06-03 08:54:26',
                'updated_at' => '2023-06-03 08:54:26',
            ),
            7 => 
            array (
                'id' => 8,
                'language' => 'blender',
                'created_at' => '2023-06-03 08:54:26',
                'updated_at' => '2023-06-03 08:54:26',
            ),
            8 => 
            array (
                'id' => 9,
                'language' => 'sketchup',
                'created_at' => '2023-06-03 08:54:26',
                'updated_at' => '2023-06-03 08:54:26',
            ),
            9 => 
            array (
                'id' => 10,
                'language' => 'c++',
                'created_at' => '2023-06-03 08:54:26',
                'updated_at' => '2023-06-03 08:54:26',
            ),
        ));
        
        
    }
}