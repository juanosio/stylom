<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            'name'      => 'Luis',
            'lastname'  => 'Gamboa',
            'identification'  => '287453',
            'email'     => 'admin@admin.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('admin1234'),
            'remember_token' => Str::random(10),
            'telephone' => '0416-3458921',
            'direction' => 'Cagua - Ciudad Jardin - Calle 17 - Casa 09',
            'created_at' => now(),
            'role' => "ADMINISTRADOR",
        ));

        \DB::table('users')->insert(array(
            'name'      => 'Adolfo',
            'lastname'  => 'Prince',
            'identification'  => '2758083',
            'email'     => 'cliente@cliente.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('cliente1234'),
            'telephone' => '0416-3458921',
            'direction' => 'Maracay - Barrio Peligroso - Calle 04 - Apartamento 08 - Bloque 9',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'role' => "CLIENTE",
        ));

        \DB::table('users')->insert(array(
            'name'      => 'Adolfo',
            'lastname'  => 'Prince',
            'identification'  => '279083',
            'email'     => 'cliente3@cliente.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('cliente1234'),
            'telephone' => '0416-3458921',
            'direction' => 'Maracay - Barrio Peligroso - Calle 04 - Apartamento 08 - Bloque 9',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'role' => "CLIENTE",
        ));

        \DB::table('users')->insert(array(
            'name'      => 'Adolfo',
            'lastname'  => 'Prince',
            'identification'  => '258903',
            'email'     => 'cliente2@cliente.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('cliente1234'),
            'telephone' => '0416-3458921',
            'direction' => 'Maracay - Barrio Peligroso - Calle 04 - Apartamento 08 - Bloque 9',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'role' => "CLIENTE",
        ));
        factory(App\User::class, 20)->create(); 
    }
}
