<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert(array(
            'nombre' => 'Hombre', 
        ));
        \DB::table('categories')->insert(array(
            'nombre' => 'Mujer', 
        ));
        \DB::table('categories')->insert(array(
            'nombre' => 'Niños y Niñas', 
        ));

        \DB::table('categories')->insert(array(
            'nombre' => 'Juvenil', 
        ));

        \DB::table('categories')->insert(array(
            'nombre' => 'Verano', 
        ));

        \DB::table('categories')->insert(array(
            'nombre' => 'Invierno', 
        ));

        \DB::table('categories')->insert(array(
            'nombre' => 'Pantalones', 
        ));

        \DB::table('categories')->insert(array(
            'nombre' => 'Franelas', 
        ));

        \DB::table('categories')->insert(array(
            'nombre' => 'Camisas', 
        ));

        \DB::table('categories')->insert(array(
            'nombre' => 'Deportivo', 
        ));
    }

}
