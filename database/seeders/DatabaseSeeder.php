<?php

namespace Database\Seeders;

use App\Models\Settings;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\SettingsFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Settings::factory(33)->count(10)->createMany([ 
            [
                "key" => "pageTitle",
                "value" => "My Portfolio"
            ],
            [
                "key" => "position",
                "value" => "Full Stack Developer",
            ],
            [
                "key" => "shortBioo",
                "value" => "Hi, I am"
            ],
        ]);

        // UserFactory::new(10)->create();
        // UserFactory/`/
        // User::factory()->count(2)->create([
        //     'name' => "DDDDDD",
            // 'email' => fake()->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password' => "password",
            // 'remember_token' => Str::random(10)
        // ]);
        // User::factory(10)->create();

        // User::factory()->count(2)->create();

        // User::factory()->create([
        //     'name' => fake()->name(),
        //     'email' =>  fake()->freeEmail()
        // ]);
        // UserFactory::new()->create([
                
            
        // ]);
    }
}
