<?php

namespace App\Http\Controllers;
use App;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        $i = 1;
        return view ('products/index', compact('products', 'i'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products/create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //    return $request->all();
          $products = new App\Product;

          $products->nombre = $request->nombre;
          $products->cantidad = $request->cantidad;
          $products->descripcion = $request->descripcion;
          $products->stock_min = 10;
          $products->stock_max= 50;
          $products->foto = $request->foto;
          $products->talla = $request->talla;
          $products->genero = $request->genero;
          $products->envio = $request->envio;
  
          $products->save();

          //IMAGEN
            if ($request->file('fotoProducto')) {
                $path = Storage::disk('public')->put('img', $request->file('fotoProducto') );
                
                $products->fill(['foto' => asset($path)]);
                $products->save();
            }
        
        Alert::success('Operación realizada con éxito','¡Producto registrado!');

        return redirect()->route('productos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
