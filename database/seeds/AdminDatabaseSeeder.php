<?php

use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::create([
            'name'  => 'Ghassan Ahmed',
            'email'  => 'gssan1018@gmail.com',
            'password'  => bcrypt('12345678'),

        ]);
    }
}
