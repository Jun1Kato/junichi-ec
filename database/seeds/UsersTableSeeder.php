<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * データベース初期値設定の実行
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'test',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'password_confirm' => bcrypt('secret'),
            'created_at' => '2019-02-21 00:00:00',
            'updated_at' => '2019-02-21 00:00:00',
        ]);
    }
}
