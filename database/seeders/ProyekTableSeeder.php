<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProyekTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('proyek')->delete();
        
        \DB::table('proyek')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'Mushroom',
                'category' => 'AI',
                'link' => 'https://colab.research.google.com/drive/1C-oAxepl3eh_cgTPHgxMDCdgRkAEpq3X',
                'foto' => 'gambar_project/Q99HkKeAanZ25Gm5grRHJJldTDUpymC7wheuxBqC.jpg',
                'created_at' => '2023-06-03 07:52:47',
                'updated_at' => '2023-06-03 07:52:47',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Boston Housing',
                'category' => 'AI',
                'link' => 'https://colab.research.google.com/drive/1Bzo1nwmf7eHNqnDejfCctv3IwG26yiWN',
                'foto' => 'gambar_project/Bj6c84chaGn2xXyuN8iIBHNtdMIFsi3YIf80hGXa.jpg',
                'created_at' => '2023-06-03 07:56:36',
                'updated_at' => '2023-06-03 07:56:36',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Ebalone',
                'category' => 'AI',
                'link' => 'https://colab.research.google.com/drive/1zhZkdLmgKRiA037MFTeGi2A9eTrMOeev',
                'foto' => 'gambar_project/4b4lv0w6KX2uRUjhBkjRfvWtOAOklo9BpWXk1VWs.webp',
                'created_at' => '2023-06-04 08:57:17',
                'updated_at' => '2023-06-04 08:57:17',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'C-tribe',
                'category' => 'Web',
                'link' => '#',
                'foto' => 'gambar_project/escjxWlH17KvI4jsWgwI49ObvWHfPCik1iaFfdeg.jpg',
                'created_at' => '2023-06-04 08:58:04',
                'updated_at' => '2023-06-04 08:58:04',
            ),
        ));
        
        
    }
}