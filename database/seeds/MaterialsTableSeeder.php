<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('materials')->insert(array(
            'nombre'      => 'aguja',
            'stock_min'  => '5',
            'stock_max' => '20',
            'stock_actual' => '4',
            'medida' => 'UNITARIO',
        ));

        \DB::table('materials')->insert(array(
            'nombre'      => 'hilo',
            'stock_min'  => '5',
            'stock_max' => '20',
            'stock_actual' => '12',
            'medida' => 'METROS',
        ));

        \DB::table('materials')->insert(array(
            'nombre'      => 'tela jean',
            'stock_min'  => '5',
            'stock_max' => '20',
            'stock_actual' => '9',
            'medida' => 'METROS',
        ));

        \DB::table('materials')->insert(array(
            'nombre'      => 'tela de vestir',
            'stock_min'  => '5',
            'stock_max' => '20',
            'stock_actual' => '9',
            'medida' => 'METROS',
        ));

        \DB::table('materials')->insert(array(
            'nombre'      => 'carton',
            'stock_min'  => '5',
            'stock_max' => '20',
            'stock_actual' => '18',
            'medida' => 'METROS',
        ));

        \DB::table('materials')->insert(array(
            'nombre'      => 'tiza',
            'stock_min'  => '5',
            'stock_max' => '20',
            'stock_actual' => '16',
            'medida' => 'UNITARIO',
        ));

    }
}
