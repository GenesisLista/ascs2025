<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // -- Abstract Submission Form

        // Theme
        if(DB::table('themes')->count()==0){
            $this->call(ThemeSeeder::class);
        }

        // Poster
        if(DB::table('posters')->count()==0){
            $this->call(PosterSeeder::class);
        }

        // -- Conference Registration Form

        // International Delegate Physical Attendees
        if(DB::table('intl_delegate_physicals')->count()==0){
            $this->call(IntlDelegatePhysicalSeeder::class);
        }

        // International Delegate Online Attendees
        if(DB::table('intl_delegate_onlines')->count()==0){
            $this->call(IntlDelegateOnlineSeeder::class);
        }

        // Local Delegate Physical Attendees
        if(DB::table('local_delegate_physicals')->count()==0){
            $this->call(LocalDelegatePhysicalSeeder::class);
        }

        // Local Delegate Online Attendees
        if(DB::table('local_delegate_onlines')->count()==0){
            $this->call(LocalDelegateOnlineSeeder::class);
        }
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
