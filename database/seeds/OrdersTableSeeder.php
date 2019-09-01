<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'id' => '1',
            'product_id' => '1',
            'quantity' => '1',
            'firstname' => 'test',
            'lastname' => 'test',
            'address' => bcrypt('secret'),
            'created_at' => '2019-02-21 00:00:00',
            'updated_at' => '2019-02-21 00:00:00',
        ]);
    }
}
