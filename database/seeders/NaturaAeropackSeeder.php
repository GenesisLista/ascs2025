<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\NaturaAeropack;

class NaturaAeropackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add this array
        $name = [
            [
                'id'=>1,
                'title'=>'Natura Aeropack',
                'image_path'=>'images/ascs_event/ascs_natura_aeropack_001.jpg'
            ],
            [
                'id'=>2,
                'title'=>'Natura Aeropack',
                'image_path'=>'images/ascs_event/ascs_natura_aeropack_002.jpg'
            ]
        ];

        foreach($name as $photo){
           NaturaAeropack::create($photo);
        }
    }
}
