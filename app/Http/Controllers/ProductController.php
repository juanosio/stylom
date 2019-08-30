<?php

namespace App\Http\Controllers;
use App;
use App\Product;
use App\MaterialProduct;
use App\Material;
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
        $material = Material::all();
        return view ('products/create', compact('material'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

          $products = new Product;

          $products->nombre = $request->nombre;
          $products->cantidad = $request->cantidad;
          $products->descripcion = $request->descripcion;
          $products->stock_min = 10;
          $products->stock_max= 50;
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

//Guardando en la tabla relacion
$cantidadMateria = count($request->medida);
for($i=0; $i<$cantidadMateria; $i++){
$materialProducts = new MaterialProduct;

            $materialProducts->material_id = $request->material[$i];
            $materialProducts->product_id = $products->id;

            $materialProducts->cantidad = $request->cantidadMateria[$i];
            $materialProducts->medida = $request->medida[$i];
            $materialProducts->save();


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
    public function edit($id)
    {
        $products = App\Product::findOrFail($id);
        return view('products/edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $productsUpdate = App\Product::findOrFail($id);

          $productsUpdate->nombre = $request->nombre;
          $productsUpdate->cantidad = $request->cantidad;
          $productsUpdate->descripcion = $request->descripcion;
          $productsUpdate->stock_min = 10;
          $productsUpdate->stock_max= 50;
          $productsUpdate->foto = $request->foto;
          $productsUpdate->talla = $request->talla;
          $productsUpdate->genero = $request->genero;
          $productsUpdate->envio = $request->envio;

          $productsUpdate->save();

          //IMAGEN
            if ($request->file('fotoProducto')) {
                $path = Storage::disk('public')->put('img', $request->file('fotoProducto') );
                
                $productsUpdate->fill(['foto' => asset($path)]);
                $productsUpdate->save();
            }
        
        Alert::success('Operación realizada con éxito','¡Producto editado!');

        return redirect()->route('productos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productsDelete = App\Product::findOrFail($id);
        $productsDelete->delete();
        Alert::success('Operación realizada con éxito','¡Producto eliminado!');

        return redirect()->route('productos.index');

    }
}
