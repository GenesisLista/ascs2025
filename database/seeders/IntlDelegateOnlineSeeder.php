<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\IntlDelegateOnline;

class IntlDelegateOnlineSeeder extends Seeder
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
                'name'=>'IFSCC Members (Very Early Bird) / Jan - Jun 2024 / USD 257'
            ],
            [
                'id'=>2,
                'name'=>'IFSCC Members (Early Bird) / Jul - Dec 2024 / USD 285'
            ],
            [
                'id'=>3,
                'name'=>'IFSCC Members (Regular) / Jan 2024 - Jun 2025 / USD 315'
            ],
            [
                'id'=>4,
                'name'=>'Non IFSCC Members (Very Early Bird)  / Jan - Jun 2024 / USD 284'
            ],
            [
                'id'=>5,
                'name'=>'Non IFSCC Members (Early Bird)  / Jul - Dec 2024 / USD 315'
            ],
            [
                'id'=>6,
                'name'=>'Non IFSCC Members (Regular) / Jan 2024 - Jun 2025 / USD 350'
            ],
            [
                'id'=>7,
                'name'=>'Students (Very Early Bird)  / Jan - Jun 2024 / USD 122'
            ],
            [
                'id'=>8,
                'name'=>'Students (Early Bird)  / Jul - Dec 2024 / USD 135'
            ],
            [
                'id'=>9,
                'name'=>'Students (Regular) / Jan 2024 - Jun 2025 / USD 150'
            ]
        ];

        foreach($name as $intldelegateonline){
            IntlDelegateOnline::create($intldelegateonline);
        }
    }
}
