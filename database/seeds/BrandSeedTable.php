<?php

use Illuminate\Database\Seeder;

class BrandSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert([
            'name' => 'Asus',
            'img' => 'https://www.mundolaptops.com/img/m/1.jpg',
        ]);
        DB::table('brand')->insert([
            'name' => 'Gigabyte',
            'img' => 'https://hardzone.es/app/uploads/2018/10/logo-gigabyte.jpg',
        ]);
        DB::table('brand')->insert([
            'name' => 'Msi',
            'img' => 'https://es.msi.com/images/MSI_logo_for_share2.png',
        ]);
        DB::table('brand')->insert([
            'name' => 'Asrock',
            'img' => 'http://electro-imagen.com/assets/uploads/2016/04/11/ASRock_en_1920-01%20%5B1600x1200%5D.jpg',
        ]);
        DB::table('brand')->insert([
            'name' => 'Nvidia',
            'img' => 'https://es.opensuse.org/images/a/aa/Nvidia_logo.jpg',
        ]);
        DB::table('brand')->insert([
            'name' => 'Sapphire',
            'img' => 'https://upload.wikimedia.org/wikipedia/en/1/1e/Sapphiretechnologylogo.jpg',
        ]);
        DB::table('brand')->insert([
            'name' => 'Zotac',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjq5GXnTMaH5PvndlH9MNF6KXVME-ghApkJUZ62HhLtqEiND3KZg',
        ]);
    }
}
