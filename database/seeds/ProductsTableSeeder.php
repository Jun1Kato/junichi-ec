<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => '1',
            'name' => str_random(10),
            'price' => '1900',
            'detail' => 'detail detail detail detail detail',
            'created_at' => '2019-02-21 00:00:00',
            'updated_at' => '2019-02-21 00:00:00',
        ]);
    }
}
