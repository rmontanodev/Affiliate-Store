<?php

use Illuminate\Database\Seeder;

class CategorySeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'Componentes',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Perifericos',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);

    }
}
