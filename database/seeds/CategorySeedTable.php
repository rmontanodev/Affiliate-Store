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
            'name' => 'Procesadores',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Memorias-ram',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Fuentes-alimentacion',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Placas-base',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Discos-duros',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Monitores',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Teclados',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Ratones',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Altavoces',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Auriculares',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Sillas-gaming',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Mesas-gaming',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Sais',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Proyectores',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Discos-duros-externos',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Tarjetas-de-memoria',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Memorias-usb',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Televisores',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Videoconsolas',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('category')->insert([
            'name' => 'Juegos',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);

    }
}
