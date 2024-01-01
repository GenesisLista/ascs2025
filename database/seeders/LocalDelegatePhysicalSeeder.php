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
                'name'=>'PSCS Members (Early Bird) / Jan - Sept 2024 / Php 22,500'
            ],
            [
                'id'=>2,
                'name'=>'PSCS Members / Oct 2024 - Jun 2025 / Php 25,000'
            ],
            [
                'id'=>3,
                'name'=>'Non PSCS Members / Jan - Sept 2024 / Php 27,000'
            ],
            [
                'id'=>4,
                'name'=>'Non PSCS Members / Oct 2024 - Jun 2025 / Php 30,000'
            ],
            [
                'id'=>5,
                'name'=>'Students / Jan - Sept 2024 / Php 18,000'
            ],
            [
                'id'=>6,
                'name'=>'Students / Oct 2024 - Jun 2025 / Php 20,000'
            ]
        ];

        foreach($name as $localdelegatephysical){
            LocalDelegatePhysical::create($localdelegatephysical);
        }
    }
}
