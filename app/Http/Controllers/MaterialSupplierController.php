<?php

namespace App\Http\Controllers;

use App;
Use App\Supplier;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

Use App\Material;
use App\MaterialSupplier;
use Illuminate\Http\Request;
use Alert;


class MaterialSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        $materialSupplier = \DB::select('SELECT materials.nombre AS materialNombre, suppliers.nombre AS supplierNombre, material_supplier.id,  material_supplier.precio, material_supplier.cantidad,  material_supplier.medida

            FROM material_supplier, materials, suppliers

            WHERE material_supplier.material_id = materials.id AND material_supplier.supplier_id = suppliers.id');

        $i = 1;
        return view ('materials_suppliers/index', compact('materialSupplier', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials = DB::table('materials')->get();
        $suppliers= DB::table('suppliers')->get();
        return view ('materials_suppliers/create', ['materials' => $materials], ['suppliers' => $suppliers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materials = DB::table('materials')->get();
        $suppliers= DB::table('suppliers')->get();
       
        $matesupp= new MaterialSupplier;

        $matesupp->material_id = $request->material_id;
        $matesupp->supplier_id = $request->supplier_id;
        $matesupp->medida = $request->medida;
        $matesupp->cantidad = $request->cantidad;
        $matesupp->precio = $request->precio;
  
        $matesupp->save();



          //Actualizo el inventario
          
           $inventario = \DB::select('SELECT * FROM materials WHERE id = ?' , 
            [$request->material_id]);

           $sumarAlInventario = $inventario[0]->stock_actual + $request->cantidad;


            $actualizarInventario = Material::find($request->material_id);

            $actualizarInventario->stock_actual = $sumarAlInventario;

            $actualizarInventario->save();

            


            

  
          Alert::success('Operación realizada con éxito','¡Materia Prima registrada!');
  
          return redirect()->route('materia-proveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
