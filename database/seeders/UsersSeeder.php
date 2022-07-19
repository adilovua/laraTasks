<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
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
            'name' => 'Michael',
            'surname' => 'Jackson',
            'birthday' => date('Y-m-d', strtotime('01.01.1969')),
            'email' => 'test1@tes.st',
            'password' => '1',
            'salary' => 5000,
            'age' => 53
        ]);
    }
}
