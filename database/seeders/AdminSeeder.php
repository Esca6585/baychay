<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'surname' => 'Adminow',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
