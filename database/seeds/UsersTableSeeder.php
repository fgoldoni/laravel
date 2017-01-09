<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => 'admin',
            'name' => 'admin',
            'email' => 'admin@contact.de',
            'password' => bcrypt('000000'),
            'created_at' => DB::raw('now()'),
            'updated_at' => DB::raw('now()'),
            'confirmation_token' => null
        ]);
        DB::table('users')->insert([
            'role' => 'user',
            'name' => 'user',
            'email' => 'user@contact.de',
            'password' => bcrypt('000000'),
            'created_at' => DB::raw('now()'),
            'updated_at' => DB::raw('now()'),
            'confirmation_token' => null
        ]);
    }
}
