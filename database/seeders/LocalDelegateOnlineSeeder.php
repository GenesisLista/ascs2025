<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\LocalDelegateOnline;

class LocalDelegateOnlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
            [
                'id'=>1,
                'name'=>'PSCS Members (Very Early Bird) / Jan - Jun 2024 / Php 6,075'
            ],
            [
                'id'=>2,
                'name'=>'PSCS Members (Early Bird) / Jul - Dec 2024 / Php 6,750'
            ],
            [
                'id'=>3,
                'name'=>'PSCS Members (Regular) / Jan 2024 - Jun 2025 / Php 7,500'
            ],
            [
                'id'=>4,
                'name'=>'Non PSCS Members (Very Early Bird) / Jan - Jun 2024 / Php 8,100'
            ],
            [
                'id'=>5,
                'name'=>'Non PSCS Members (Early Bird) / Jul - Dec 2024 / Php 9,000'
            ],
            [
                'id'=>6,
                'name'=>'Non PSCS Members (Regular) / Jan 2024 - Jun 2025 / Php 10,000'
            ],
            [
                'id'=>7,
                'name'=>'Students (Very Early Bird) / Jan - Jun 2024 / Php 4,050'
            ],
            [
                'id'=>8,
                'name'=>'Students (Early Bird) / Jul - Dec 2024 / Php 4,500'
            ],
            [
                'id'=>9,
                'name'=>'Students (Regular) / Jan 2024 - Jun 2025 / Php 4,950'
            ]
        ];

        foreach($name as $localdelegateonline){
            LocalDelegateOnline::create($localdelegateonline);
        }
    }
}
