<?php

namespace App\Http\Controllers;
use App;
use App\Material;
use App\Supplier;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Alert;
use Illuminate\Support\Facades\Auth;
use Bitacora;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $materials = Material::orderBy('id', 'DESC')->get();
        $i = 1;

        return view ('materials/index', compact('materials', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = App\Supplier::all();
        return view ('materials/create', compact('suppliers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\MaterialStoreRequest $request)
    {
        //  return $request->all();

 if($request){

    $materials = new App\Material;

    $materials->nombre = $request->nombre;
    $materials->medida = $request->medida;
    $materials->stock_actual = $request->stock_actual;
    $materials->stock_min = $request->stock_min;
    $materials->stock_max= $request->stock_max;


 
    $vmaterial = \DB::select('SELECT * FROM materials WHERE nombre = ?' , [$request->nombre]);
            

    if ($vmaterial) {
        Alert::error('Esta materia prima ya existe','¡Error en el registro!');

        return redirect()->route('materias-primas.create');
        die();
 }


 
 $vmaterial2 = \DB::select('SELECT materials.stock_min, materials.stock_max FROM materials WHERE materials.stock_min = ? <= materials.stock_max = ?', [$request->stock_min, $request->stock_max]);

 

 if ($vmaterial2) {
     Alert::error('El stock minimo no puede ser mayor al maximo','¡Error en el registro!');

     return redirect()->route('materias-primas.create');
     die();
}


$bitacoras = new App\Bitacora;

$bitacoras->user =  Auth::user()->name;
$bitacoras->action = 'Ha registrado una nueva materia prima';
$bitacoras->save();
       

        $materials->save();

        Alert::success('Operación realizada con éxito','¡Materia Prima registrada!');

        return redirect()->route('materias-primas.index');
    }
}

    /**
     * Display the spemedidaied resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materials = App\Material::findOrFail($id);
        return view('materials/edit', compact('materials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\MaterialUpdateRequest $request, $id)
    {
        $materialsUpdate = App\Material::findOrFail($id);
        $materialsUpdate->nombre = $request->nombre;
        $materialsUpdate->medida = $request->medida;
        $materialsUpdate->stock_actual = $request->stock_actual;
        $materialsUpdate->stock_min = $request->stock_min;
        $materialsUpdate->stock_max= $request->stock_max;




        $bitacorasUpdate = new App\Bitacora;

        $bitacorasUpdate->user =  Auth::user()->name;
        $bitacorasUpdate->action = 'Ha editado una  materia prima';
        $bitacorasUpdate->save();
        // $materialsUpdate->save();

        // Alert::success('Operación realizada con éxito','¡Materia Prima editada!');

        // return redirect()->route('materias-primas.index');
    }

    public function pdf()

    {
        $materials = Material::all();

         $i = 1;

         $date = date('d-m-Y');
        $dompdf = PDF::loadView('pdf.materiaprima', compact('materials', 'i','date'));
     



        return $dompdf->stream('products.pdf');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materialsDelete = App\Material::findOrFail($id);
        
$bitacorasDelete = new App\Bitacora;

$bitacorasDelete->user =  Auth::user()->name;
$bitacorasDelete->action = 'Ha eliminado una materia prima';
$bitacorasDelete->save();
        $materialsDelete->delete();
        Alert::success('Operación realizada con éxito','¡Materia Prima eliminada!');

        return redirect()->route('materias-primas.index');
    }
}
