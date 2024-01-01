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
                'name'=>'PSCS Members (Early Bird) / Jan - Sept 2024 / Php 6,750'
            ],
            [
                'id'=>2,
                'name'=>'PSCS Members / Oct 2024 - Jun 2025 / Php 7,500'
            ],
            [
                'id'=>3,
                'name'=>'Non PSCS Members (Early Bird) / Jan - Sept 2024 / Php 9,000'
            ],
            [
                'id'=>4,
                'name'=>'Non PSCS Members / Oct 2024 - Jun 2025 / Php 10,000'
            ],
            [
                'id'=>5,
                'name'=>'Students (Early Bird) / Jan - Sept 2024 / Php 4,500'
            ],
            [
                'id'=>6,
                'name'=>'Students / Oct 2024 - Jun 2025 / Php 4,950'
            ]
        ];

        foreach($name as $localdelegateonline){
            LocalDelegateOnline::create($localdelegateonline);
        }
    }
}
