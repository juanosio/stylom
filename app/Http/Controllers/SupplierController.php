<?php

namespace App\Http\Controllers;
use App;
use App\Supplier;
use Illuminate\Http\Requests\MaterialStoreRequest;
use Alert;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $suppliers = Supplier::orderBy('id', 'DESC')->get();
         $i = 1;
        return view ('suppliers/index', compact('suppliers', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('suppliers/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(SupplierStoreRequest $request)
    {

        // return $request->all();
         $suppliers = new App\Supplier;

        $suppliers->nombre = $request->nombre;
        $suppliers->rif = $request->rif;
        $suppliers->direccion = $request->direccion;
        $suppliers->telefono = $request->telefono;
        $suppliers->correo = $request->correo;

        $suppliers->save();

        Alert::success('Operación realizada con éxito','¡Proveedor registrado!');

        return redirect()->route('proveedores.index');
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
        $suppliers = App\Supplier::findOrFail($id);
        return view('suppliers/edit', compact('suppliers'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierUpdateRequest $request, $id)
    {
        $suppliersUpdate = App\Supplier::findOrFail($id);

        $suppliersUpdate->nombre = $request->nombre;
        $suppliersUpdate->rif = $request->rif;
        $suppliersUpdate->direccion = $request->direccion;
        $suppliersUpdate->telefono = $request->telefono;
        $suppliersUpdate->correo = $request->correo;

        $suppliersUpdate->save();

        Alert::success('Operación realizada con éxito','¡Proveedor editado!');

        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppliersDelete = App\Supplier::findOrFail($id);
        $suppliersDelete->delete();
        Alert::success('Operación realizada con éxito','¡Proveedor eliminado!');

        return redirect()->route('proveedores.index');
    }
}
