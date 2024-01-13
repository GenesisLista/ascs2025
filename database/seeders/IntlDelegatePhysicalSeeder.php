<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\IntlDelegatePhysical;

class IntlDelegatePhysicalSeeder extends Seeder
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
                'name'=>'IFSCC Members (Very Early Bird) / Jan - Jun 2024 / USD 450'
            ],
            [
                'id'=>2,
                'name'=>'IFSCC Members (Early Bird) / Jul - Dec 2024 / USD 500'
            ],
            [
                'id'=>3,
                'name'=>'IFSCC Members (Regular) / Jan 2024 - Jun 2025 / USD 550'
            ],
            [
                'id'=>4,
                'name'=>'Non IFSCC Members (Very Early Bird) / Jan - Jun 2024 / USD 486'
            ],
            [
                'id'=>5,
                'name'=>'Non IFSCC Members (Early Bird) / Jul - Dec 2024 / USD 540'
            ],
            [
                'id'=>6,
                'name'=>'Non IFSCC Members (Regular) / Jan 2024 - Jun 2025 / USD 600'
            ],
            [
                'id'=>7,
                'name'=>'Students (Very Early Bird) / Jan - Jun 2024 / USD 384'
            ],
            [
                'id'=>8,
                'name'=>'Students (Early Bird) / Jul - Dec 2024 / USD 360'
            ],
            [
                'id'=>9,
                'name'=>'Students (Regular) / Jan 2024 - Jun 2025 / USD 400'
            ]
        ];

        foreach($name as $intldelegatephysical){
            IntlDelegatePhysical::create($intldelegatephysical);
        }
    }
}
