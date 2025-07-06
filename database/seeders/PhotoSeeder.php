<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Photo;

class PhotoSeeder extends Seeder
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
                'title'=>'ASCS Conference',
                'image_path'=>'images/ascs_event/ascs_conference_001.jpg'
            ],
            [
                'id'=>2,
                'title'=>'ASCS Conference',
                'image_path'=>'images/ascs_event/ascs_conference_002.jpg'
            ]
        ];

        foreach($name as $photo){
           Photo::create($photo);
        }
    }
}
