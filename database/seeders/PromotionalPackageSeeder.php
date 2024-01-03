<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PromotionalPackage;

class PromotionalPackageSeeder extends Seeder
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
                'name'=>'Bags - Php 250,000'
            ],
            [
                'id'=>2,
                'name'=>'Lanyards and Badges - Php Php 100,00'
            ],
            [
                'id'=>3,
                'name'=>'Ballpens - Php 50,000'
            ],
            [
                'id'=>4,
                'name'=>'Notepads - Php 50,000'
            ]
        ];

        foreach($name as $promotional){
            PromotionalPackage::create($promotional);
        }
    }
}
