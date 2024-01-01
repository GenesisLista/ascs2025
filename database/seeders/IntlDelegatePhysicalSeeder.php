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
                'name'=>'IFSCC Members (Early Bird) / Jan - Sept 2024 / USD 500'
            ],
            [
                'id'=>2,
                'name'=>'IFSCC Members / Oct 2024 - Jun 2025 / USD 550'
            ],
            [
                'id'=>3,
                'name'=>'Non IFSCC Members (Early Bird) / Jan - Sept 2024 / USD 540'
            ],
            [
                'id'=>4,
                'name'=>'Non IFSCC Members / Oct 2024 - Jun 2025 / USD 600'
            ],
            [
                'id'=>5,
                'name'=>'Students (Early Bird) / Jan - Sept 2024 / USD 360'
            ],
            [
                'id'=>6,
                'name'=>'Students / Oct 2024 - Jun 2025 / USD 400'
            ]
        ];

        foreach($name as $intldelegatephysical){
            IntlDelegatePhysical::create($intldelegatephysical);
        }
    }
}
