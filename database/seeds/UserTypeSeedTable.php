<?php

use Illuminate\Database\Seeder;

class UserTypeSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('UserType')->insert(['Type'=>'Admin']);
        DB::table('UserType')->insert(['Type'=>'Encargado']);
        DB::table('UserType')->insert(['Type'=>'Becario']);
        DB::table('UserType')->insert(['Type'=>'Usuario']);
    }
}
