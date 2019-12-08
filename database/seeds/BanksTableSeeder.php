<?php
use Illuminate\Database\Seeder;
class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('banks')->insert(array( 'code' => '0001', 'name' => 'BANCO CENTRAL DE VENEZUELA' )); 
		\DB::table('banks')->insert(array( 'code' => '0102', 'name' => 'BANCO DE VENEZUELA S.A.C.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0104', 'name' => 'VENEZOLANO DE CRÉDITO, S.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0105', 'name' => 'BANCO MERCANTIL, C.A. S.A.C.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0108', 'name' => 'BANCO PROVINCIAL, S.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0114', 'name' => 'BANCO DEL CARIBE, C.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0115', 'name' => 'BANCO EXTERIOR, C.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0116', 'name' => 'BANCO OCCIDENTAL DE DESCUENTO BANCO UNIVERSAL, C.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0128', 'name' => 'BANCO CARONI, C.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0134', 'name' => 'BANESCO BANCO UNIVERSAL S.A.C.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0137', 'name' => 'BANCO SOFITASA BANCO UNIVERSAL, C.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0138', 'name' => 'BANCO PLAZA, BANCO UNIVERSAL C.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0146', 'name' => 'BANCO DE LA GENTE EMPRENDEDORA BANGENTE, C.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0149', 'name' => 'BANCO DEL PUEBLO SOBERANO, BANCO DE DESARROLLO' )); 
		\DB::table('banks')->insert(array( 'code' => '0151', 'name' => 'BFC BANCO FONDO COMUN C.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0157', 'name' => 'DELSUR BANCO UNIVERSAL, C.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0163', 'name' => 'BANCO DEL TESORO, C.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0166', 'name' => 'BANCO AGRICOLA DE VENEZUELA, C.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0168', 'name' => 'BANCRECER S.A. BANCO DE DESARROLLO' )); 
		\DB::table('banks')->insert(array( 'code' => '0169', 'name' => 'MI BANCO, BANCO MICROFINANCIERO, C.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0171', 'name' => 'BANCO ACTIVO, C.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0172', 'name' => 'BANCAMIGA BANCO MICROFINANCIERO, C.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0173', 'name' => 'BANCO INTERNACIONAL DE DESARROLLO, C.A. BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0174', 'name' => 'BANPLUS BANCO UNIVERAL, C.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0175', 'name' => 'BANCO BICENTENARIO BANCO UNIVERSAL, C.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0176', 'name' => 'NOVO BANCO, S.A. SUCURSAL VENEZUELA BANCO UNIVERSAL' )); 
		\DB::table('banks')->insert(array( 'code' => '0177', 'name' => 'BANCO DE LA FUERZA ARMADA NACIONAL BOLIVARIANA, B.U.' )); 
		\DB::table('banks')->insert(array( 'code' => '0190', 'name' => 'CITIBANK N.A.' )); 
		\DB::table('banks')->insert(array( 'code' => '0191', 'name' => 'BANCO NACIONAL CRÉDITO, C.A. BANCO UNIVERSAL' )); 
    }
    
}








