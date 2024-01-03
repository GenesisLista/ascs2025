<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SponsorshipPackage;

class SponsorshipPackageSeeder extends Seeder
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
                'name'=>'Diamond Package - Php 1,000,000'
            ],
            [
                'id'=>2,
                'name'=>'Gold Package - Php 500,000'
            ],
            [
                'id'=>3,
                'name'=>'Silver Package - Php 150,000'
            ],
            [
                'id'=>4,
                'name'=>'Bronze Package - Php 80,000'
            ],
            [
                'id'=>5,
                'name'=>'Patron Package - Php 50,000'
            ]
        ];

        foreach($name as $sponsorship){
            SponsorshipPackage::create($sponsorship);
        }
    }
}
