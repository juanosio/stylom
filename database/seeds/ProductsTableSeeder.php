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
            'foto' =>'http://127.0.0.1:8000/img/camisa.jpg',
            'genero' => 'FEMENINO',
            'envio' => 'DOMESA'
            
        ));

        \DB::table('products')->insert(array(
            'nombre'      => 'Pantalon',
            'cantidad'  => '14',
            'stock_min'  => '5',
            'stock_max' => '20',
            'descripcion' => 'Pantalon de vestir',
            'talla' => 'M',
            'foto' =>'http://127.0.0.1:8000/img/pantalon.jpg',
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
            'foto' =>'http://127.0.0.1:8000/img/franelilla.png',
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
            'foto' =>'http://127.0.0.1:8000/img/monosdeportivos.jpg',
            'genero' => 'MASCULINO',
            'envio' => 'ZOOM'
            
        ));
    }
}
