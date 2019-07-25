<?php

use Illuminate\Database\Seeder;

class CustomersProductAlertSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Customersproductalert')->insert([
            'Customer_id' => 1,
            'Product_id' => 1,
            'Price' => 9.99
        ]);
        DB::table('Customersproductalert')->insert([
            'Customer_id' => 2,
            'Product_id' => 2,
            'Price' => 19.99
        ]);
        DB::table('Customersproductalert')->insert([
            'Customer_id' => 3,
            'Product_id' => 3,
            'Price' => 49.99
        ]);
        DB::table('Customersproductalert')->insert([
            'Customer_id' => 4,
            'Product_id' => 4,
            'Price' => 99.99
        ]);
        DB::table('Customersproductalert')->insert([
            'Customer_id' => 5,
            'Product_id' => 5,
            'Price' => 149.99
        ]);
        DB::table('Customersproductalert')->insert([
            'Customer_id' => 6,
            'Product_id' => 6,
            'Price' => 199.99
        ]);
        DB::table('Customersproductalert')->insert([
            'Customer_id' => 7,
            'Product_id' => 7,
            'Price' => 249.99
        ]);
        DB::table('Customersproductalert')->insert([
            'Customer_id' => 8,
            'Product_id' => 8,
            'Price' => 299.99
        ]);
        DB::table('Customersproductalert')->insert([
            'Customer_id' => 9,
            'Product_id' => 9,
            'Price' => 349.99
        ]);
        DB::table('Customersproductalert')->insert([
            'Customer_id' => 10,
            'Product_id' => 10,
            'Price' => 400
        ]);
    }
}
