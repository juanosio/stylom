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
            'category_id' => 9,
            'cantidad'  => '18',
            'stock_min'  => '5',
            'stock_max' => '20',
            'precio' => '3000',
            'descripcion' => 'Camisa de alta calidad',
            'talla' => 'S',
            'foto' =>'http://127.0.0.1:8000/img/camisa.jpg',
            'category_id' => '1',
            'estado' =>  'HABILITADO',
            'envio' => 'DOMESA'
            
        ));

        \DB::table('products')->insert(array(
            'nombre'      => 'Pantalon',
            'category_id' => 7,
            'cantidad'  => '14',
            'stock_min'  => '5',
            'stock_max' => '20',
            'precio' => '23000',
            'descripcion' => 'Pantalon de vestir',
            'talla' => 'M',
            'foto' =>'http://127.0.0.1:8000/img/pantalon.jpg',
            'category_id' => '1',
            'estado' => 'HABILITADO',
            'envio' => 'DOMESA'
            
        ));

        \DB::table('products')->insert(array(
            'nombre'      => 'Franelilla',
            'category_id' => 8,
            'cantidad'  => '19',
            'stock_min'  => '5',
            'stock_max' => '20',
            'precio' => '50000',
            'descripcion' => 'Franelilla color azul de algodon',
            'talla' => 'L',
            'foto' =>'http://127.0.0.1:8000/img/franelilla.png',
            'category_id' => '2',
            'estado' => 'HABILITADO',
            'envio' => 'MRW'
            
        ));

        \DB::table('products')->insert(array(
            'nombre'      => 'Mono deportivo',
            'category_id' => 10,
            'cantidad'  => '3',
            'stock_min'  => '5',
            'stock_max' => '20',
            'precio' => '1500',
            'descripcion' => 'Mono flexible para hacer deporte',
            'talla' => 'M',
            'foto' =>'http://127.0.0.1:8000/img/monosdeportivos.jpg',
            'category_id' => '3',
            'estado' => 'HABILITADO',
            'envio' => 'ZOOM'
            
        ));
    }
}
