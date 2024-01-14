<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SpecialDietary;

class SpecialDietarySeeder extends Seeder
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
                'name'=>'Halal'
            ],
            [
                'id'=>2,
                'name'=>'Kosher'
            ],
            [
                'id'=>3,
                'name'=>'Vegetarian'
            ],
            [
                'id'=>4,
                'name'=>'Low Salt'
            ],
            [
                'id'=>5,
                'name'=>'Low Sugar'
            ],
            [
                'id'=>6,
                'name'=>'Others'
            ]
        ];

        foreach($name as $dietary){
            SpecialDietary::create($dietary);
        }
    }
}
