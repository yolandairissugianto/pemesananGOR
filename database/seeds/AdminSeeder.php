<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::create([
            'name' => "Administrator",
            'email' => "admin@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make("12345678"),
        ]);
    }
}
