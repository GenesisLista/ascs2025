<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Theme;

class ThemeSeeder extends Seeder
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
                'name'=>'Beauty technology and Digital application'
            ],
            [
                'id'=>2,
                'name'=>'Beauty innovation in Raw material packaging and finished products'
            ],
            [
                'id'=>3,
                'name'=>'Beauty tradition and Evolution'
            ],
            [
                'id'=>4,
                'name'=>'Beauty safety and efficacy testing'
            ],
            [
                'id'=>5,
                'name'=>'Natural resources for new ingredients'
            ]
        ];

        foreach($name as $theme){
            Theme::create($theme);
        }
    }
}
