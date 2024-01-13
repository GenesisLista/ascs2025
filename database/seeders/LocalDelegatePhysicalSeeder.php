<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\LocalDelegatePhysical;

class LocalDelegatePhysicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
            [
                'id'=>1,
                'name'=>'PSCS Members (Very Early Bird) / Jan - Jun 2024 / Php 20,250'
            ],
            [
                'id'=>2,
                'name'=>'PSCS Members (Early Bird) / Jul - Dec 2024 / Php 22,500'
            ],
            [
                'id'=>3,
                'name'=>'PSCS Members (Regular) / Jan 2024 - Jun 2025 / Php 25,000'
            ],
            [
                'id'=>4,
                'name'=>'Non PSCS Members (Very Early Bird)  / Jan - Jun 2024 / Php 24,300'
            ],
            [
                'id'=>5,
                'name'=>'Non PSCS Members (Early Bird)  / Jul - Dec 2024 / Php 27,000'
            ],
            [
                'id'=>6,
                'name'=>'Non PSCS Members (Regular) / Jan 2024 - Jun 2025 / Php 30,000'
            ],
            [
                'id'=>7,
                'name'=>'Students (Very Early Bird)  / Jan - Jun 2024 / Php 16,200'
            ],
            [
                'id'=>8,
                'name'=>'Students (Early Bird)  / Jul - Dec 2024 / Php 18,000'
            ],
            [
                'id'=>9,
                'name'=>'Students (Regular) / Jan 2024 - Jun 2025 / Php 20,000'
            ]
        ];

        foreach($name as $localdelegatephysical){
            LocalDelegatePhysical::create($localdelegatephysical);
        }
    }
}
