<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExperiancesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('experiances')->delete();
        
        \DB::table('experiances')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Backend',
                'place' => 'Intive Studio',
                'year' => '2021-2022',
                'about' => 'made dashboard and API for websites',
                'created_at' => '2023-06-03 07:17:31',
                'updated_at' => '2023-06-03 07:17:31',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Data Science',
                'place' => 'ITS',
                'year' => '2020-2023',
                'about' => 'learn how to process data, visualize data, and how to draw conclusion',
                'created_at' => '2023-06-03 07:19:36',
                'updated_at' => '2023-06-03 07:19:36',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'AI',
                'place' => 'LKS',
                'year' => '2022-2023',
                'about' => '1st place at LKS wilkers competition',
                'created_at' => '2023-06-04 08:59:43',
                'updated_at' => '2023-06-04 08:59:43',
            ),
        ));
        
        
    }
}