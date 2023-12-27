<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Poster;

class PosterSeeder extends Seeder
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
                'name'=>'Poster'
            ],
            [
                'id'=>2,
                'name'=>'Poduim ( Oral )'
            ]
        ];

        foreach($name as $poster){
            Poster::create($poster);
        }
    }
}
