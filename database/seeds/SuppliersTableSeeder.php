<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('suppliers')->insert(array(
            'nombre'      => 'El castillo',
            'rif'  => '5352',
            'direccion' => 'Maracay - Estado Aragua',
            'telefono' => '04149834432',
            'correo' => 'castillo@gmail.com',
        ));

        \DB::table('suppliers')->insert(array(
            'nombre'      => 'Telas Doña Lolis',
            'rif'  => '4353635',
            'direccion' => 'Av. Carrillo, cruce con Bermudez',
            'telefono' => '04163358762',
            'correo' => 'doñaLolis@gmail.com',
        ));

        \DB::table('suppliers')->insert(array(
            'nombre'      => 'Telas el gran bazar',
            'rif'  => '98535233',
            'direccion' => 'El limon - Av Fuerzas maritimas',
            'telefono' => '02435443254',
            'correo' => 'telasBazar@gmail.com',
        ));
    }
}
