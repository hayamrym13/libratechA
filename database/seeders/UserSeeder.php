<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'role' => 'admin',
            'inv' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
