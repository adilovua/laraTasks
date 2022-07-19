<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //
        DB::table('users')->insert([
            'name' => 'Umid',
            'surname' => 'Adilov',
            'birthday' => date('Y-m-d', strtotime('01.01.1979')),
            'email' => 'test@te.st',
            'password' => '1',
            'salary' => 5000,
            'age' => 43
        ]);
    }
}
