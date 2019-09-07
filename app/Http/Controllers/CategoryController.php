<?php

namespace App\Http\Controllers;
use App;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Request\CategoryStoreRequest;
use App\Http\Request\CategoryUpdateRequest;
use Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $i = 1;
       return view ('categories/index', compact('categories', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('categories/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CategoryStoreRequest $request)
    {
   
         // return $request->all();
         $categories = new App\Category;

        $categories->nombre = $request->nombre;

        $categories->save();

        Alert::success('Operación realizada con éxito','¡Categoria registrada!');

        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = App\Category::findOrFail($id);
        return view('categories/edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\CategoryUpdateRequest $request, $id)
    {
        $categoriesUpdate = App\Category::findOrFail($id);

        $categoriesUpdate->nombre = $request->nombre;


        $categoriesUpdate->save();

        Alert::success('Operación realizada con éxito','¡Categoria editada!');

        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppliersDelete = App\Category::findOrFail($id);
        $suppliersDelete->delete();
        Alert::success('Operación realizada con éxito','¡Categoria eliminada!');

        return redirect()->route('categorias.index');
    }
}
