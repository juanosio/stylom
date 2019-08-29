<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert(array(
            'nombre'      => 'Camisa de vestir',
            'cantidad'  => '18',
            'stock_min'  => '5',
            'stock_max' => '20',
            'descripcion' => 'Camisa de alta calidad',
            'talla' => 'S',
            'genero' => 'FEMENINO',
            'envio' => 'DOMESA'
            
        ));

        \DB::table('products')->insert(array(
            'nombre'      => 'Sudadera',
            'cantidad'  => '14',
            'stock_min'  => '5',
            'stock_max' => '20',
            'descripcion' => 'Sudadera deportiva',
            'talla' => 'M',
            'genero' => 'MASCULINO',
            'envio' => 'DOMESA'
            
        ));

        \DB::table('products')->insert(array(
            'nombre'      => 'Franelilla',
            'cantidad'  => '19',
            'stock_min'  => '5',
            'stock_max' => '20',
            'descripcion' => 'Franelilla color azul de algodon',
            'talla' => 'L',
            'genero' => 'FEMENINO',
            'envio' => 'MRW'
            
        ));

        \DB::table('products')->insert(array(
            'nombre'      => 'Mono deportivo',
            'cantidad'  => '3',
            'stock_min'  => '5',
            'stock_max' => '20',
            'descripcion' => 'Mono flexible para hacer deporte',
            'talla' => 'M',
            'genero' => 'MASCULINO',
            'envio' => 'ZOOM'
            
        ));
    }
}
