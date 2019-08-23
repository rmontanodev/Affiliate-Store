<?php

use Illuminate\Database\Seeder;

class SubcategoriesSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            'name' => 'Procesadores',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 1
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Memorias-ram',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 1
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Fuentes-alimentacion',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 1
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Placas-base',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 1
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Discos-duros',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 1
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Monitores',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Teclados',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Ratones',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Altavoces',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Auriculares',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Sillas-gaming',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Mesas-gaming',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Sais',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Proyectores',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Discos-duros-externos',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Tarjetas-de-memoria',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Memorias-usb',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Televisores',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Videoconsolas',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Juegos',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
            'category_id' => 2
        ]);

    }
}
