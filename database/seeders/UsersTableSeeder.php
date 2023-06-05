<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Elang Pandi P',
                'title' => 'Programer',
                'alamat' => 'Royal Sambibulu Asri blok A no 17, Taman, Sidoarjo',
                'email' => 'elangppranoto@gmail.com',
                'phone' => '+6281332034312',
                'facebook' => '#',
                'instagram' => 'https://www.instagram.com/0nelang/?igshid=ZDc4ODBmNjlmNQ==',
                'github' => 'https://github.com/0nelang',
                'linkedin' => '#',
                'about' => 'Hello, I\'m Elang, an informatics engineering student at PENS who\'s deeply passionate about machine learning, web development, and 3D modeling. I thrive on the challenge of applying machine learning algorithms to real-world problems and enjoy crafting interactive websites using the latest front-end and back-end technologies. Additionally, I\'m currently exploring the world of 3D modeling to create immersive experiences for the metaverse. My goal is to leverage my skills and contribute to the advancement of technology, collaborating with others to shape a better future.',
                'foto' => 'gambar_user/MasDdRHcGmNfJZJ6PuQ94yq2300b7FXXL6lvMaUP.jpg',
                'role' => 'admin',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cJljZ8BeVZIEF6eVmePioODQtncD2FQwEJeKTFxDqgLRuqzr8qL12',
                'remember_token' => NULL,
                'created_at' => '2023-06-03 06:32:41',
                'updated_at' => '2023-06-03 08:54:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'walikelas',
                'title' => NULL,
                'alamat' => NULL,
                'email' => 'walikelas@gmail.com',
                'phone' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'github' => NULL,
                'linkedin' => NULL,
                'about' => NULL,
                'foto' => NULL,
                'role' => 'walikelas',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cJljZ8BeVZIEF6eVmePioODQtncD2FQwEJeKTFxDqgLRuqzr8qL12',
                'remember_token' => NULL,
                'created_at' => '2023-06-03 06:32:41',
                'updated_at' => '2023-06-03 06:32:41',
            ),
        ));
        
        
    }
}