<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('123');

        $users = [
            ['name' => 'Cüneyt', 'password' => $password, 'email' => 'admin@admin.com', 'yetki' => '1'],
            ['name' => 'uye', 'password' => $password, 'email' => 'uye@uye', 'yetki' => '2'],

        ];

        DB::table('users')->insert($users);
    }
}
