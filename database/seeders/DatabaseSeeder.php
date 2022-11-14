<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'hector',
            'email' => 'hector@hector.com',
            'password' => password_hash('H3ctorjime', PASSWORD_BCRYPT)
        ]);

        Project::factory(5)->create(['owner_id' => $user->id]);

        Project::factory(5)->create();
    }
}
