<?php

namespace Database\Seeders;

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
        $this->call([
            AdminSeeder::class,
            TeaSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
        \App\Models\Tea::factory(64)->create();
        \App\Models\Message::factory(50)->create();
    }
}
