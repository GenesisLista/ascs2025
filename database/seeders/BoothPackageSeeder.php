<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\BoothPackage;

class BoothPackageSeeder extends Seeder
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
                'name'=>'4 SQM - Php 40,000'
            ],
            [
                'id'=>2,
                'name'=>'6 SQM - Php 60,000'
            ],
            [
                'id'=>3,
                'name'=>'9 SQM - Php 90,000'
            ],
            [
                'id'=>4,
                'name'=>'18 SQM - Php 170,000'
            ]
        ];

        foreach($name as $booth){
            BoothPackage::create($booth);
        }
    }
}
