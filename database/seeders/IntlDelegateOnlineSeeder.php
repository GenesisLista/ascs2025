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
                'name'=>'IFSCC Members (Early Bird) / Jan - Sept 2024 / USD 285'
            ],
            [
                'id'=>2,
                'name'=>'IFSCC Members / Oct 2024 - Jun 2025 / USD 315'
            ],
            [
                'id'=>3,
                'name'=>'Non IFSCC Members / Jan - Sept 2024 / USD 315'
            ],
            [
                'id'=>4,
                'name'=>'Non IFSCC Members / Oct 2024 - Jun 2025 / USD 350'
            ],
            [
                'id'=>5,
                'name'=>'Students / Jan - Sept 2024 / USD 135'
            ],
            [
                'id'=>6,
                'name'=>'Students / Oct 2024 - Jun 2025 / USD 150'
            ]
        ];

        foreach($name as $intldelegateonline){
            IntlDelegateOnline::create($intldelegateonline);
        }
    }
}
