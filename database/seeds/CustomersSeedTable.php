<?php

use Illuminate\Database\Seeder;

class CustomersSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Customers')->insert(['Fullname'=>'Renato Montaño Da Silva','Email'=>'renatogp13@gmail.com','Password'=>'HashHashin','imgAvatar'=>'https://images.stv.tv/player/w1180xh660/580105-pingu.jpg','On_off'=>true]);
        DB::table('Customers')->insert(['Fullname'=>'Ignacio Montaño Da Silva','Email'=>'sacas2@gmail.com','Password'=>'HashHashin','imgAvatar'=>'https://images.stv.tv/player/w1180xh660/580105-pingu.jpg','On_off'=>true]);
        DB::table('Customers')->insert(['Fullname'=>'Eusta Montaño Da Silva','Email'=>'3412321@gmail.com','Password'=>'HashHashin','imgAvatar'=>'https://images.stv.tv/player/w1180xh660/580105-pingu.jpg','On_off'=>true]);
        DB::table('Customers')->insert(['Fullname'=>'Fabio Montaño Da Silva','Email'=>'Arribeder@gmail.com','Password'=>'HashHashin','imgAvatar'=>'https://images.stv.tv/player/w1180xh660/580105-pingu.jpg','On_off'=>false]);
        DB::table('Customers')->insert(['Fullname'=>'El Mandela','Email'=>'Mamamia@gmail.com','Password'=>'HashHashin','imgAvatar'=>'https://images.stv.tv/player/w1180xh660/580105-pingu.jpg','On_off'=>false]);
    }
}
