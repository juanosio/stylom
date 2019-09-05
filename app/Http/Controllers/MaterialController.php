<?php

namespace App\Http\Controllers;
use App;
use App\Material;
use App\Supplier;
use Illuminate\Http\Request;
use Alert;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = App\Supplier::all();
        $materials = Material::orderBy('id', 'DESC')->get();
        $i = 1;
        return view ('materials/index', compact('materials', 'i'), compact('suppliers'));
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
        $materials = new App\Material;

        $materials->nombre = $request->nombre;
        $materials->medida = $request->medida;
        $materials->stock_actual = $request->stock_actual;
        $materials->stock_min = 10;
        $materials->stock_max= 50;

        $materials->save();

        Alert::success('Operación realizada con éxito','¡Materia Prima registrada!');

        return redirect()->route('materias-primas.index');
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

        $materialsUpdate->save();

        Alert::success('Operación realizada con éxito','¡Materia Prima editada!');

        return redirect()->route('materias-primas.index');
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
        $materialsDelete->delete();
        Alert::success('Operación realizada con éxito','¡Materia Prima eliminada!');

        return redirect()->route('materias-primas.index');
    }
}
