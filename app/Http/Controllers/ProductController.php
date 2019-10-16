<?php

namespace App\Http\Controllers;
use App;
use App\Product;
use App\MaterialProduct;
use App\Material;
use App\Category;
use DB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
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
        

        $products = \DB::select('SELECT categories.nombre AS categoryNombre, products.id, products.nombre,  products.precio, products.cantidad,  products.stock_min, products.stock_max, products.descripcion , products.foto, products.talla, products.envio, products.estado

        FROM products, categories

        WHERE products.category_id = categories.id');


        // $products = Product::orderBy('id', 'DESC')->get();
        $i = 1;
        return view ('products/index', compact('products','Products2', 'i'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $material = Material::all();
        $category = Category::all();
        return view ('products/create', compact('material'),compact('category'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\ProductStoreRequest $request)
    {
      
        $materials = Material::all();
          $products = new Product;

          $products->nombre = $request->nombre;
          $products->cantidad = $request->cantidad;
          $products->descripcion = $request->descripcion;
          $products->stock_min = $request->stock_min;
          $products->stock_max = $request->stock_max; 
          $products->precio = $request->precio; 
          $products->category_id = $request->category_id; 
          $products->talla = $request->talla;
          $products->envio = $request->envio;


          $vproduct = \DB::select('SELECT * FROM products WHERE nombre = ? AND talla = ? AND category_id = ?' , [$request->nombre, $request->talla, $request->category_id]);
            

            if ($vproduct) {
                Alert::error('Este producto ya existe','¡Error en el registro!');
        
                return redirect()->route('productos.create');
                die();
         }

         $vproduct2 = \DB::select('SELECT products.stock_min, products.stock_max FROM products WHERE products.stock_min = ? <= products.stock_max = ?', [$request->stock_min, $request->stock_max]);

 

 if ($vproduct2) {
     Alert::error('El stock minimo no puede ser mayor al maximo','¡Error en el registro!');

     return redirect()->route('productos.create');
     die();
}


  
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
    public function update(\App\Http\Requests\ProductUpdateRequest $request, $id)
    {
      $productsUpdate = App\Product::findOrFail($id);

          $productsUpdate->nombre = $request->nombre;
          $productsUpdate->cantidad = $request->cantidad;
          $productsUpdate->category = $request->category;
          $productsUpdate->descripcion = $request->descripcion;
          $productsUpdate->stock_min = $request->stock_min;
          $productsUpdate->stock_max= $request->stock_max;
          $productsUpdate->foto = $request->foto;
          $productsUpdate->precio = $request->precio;
          $productsUpdate->talla = $request->talla;
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

    
    public function pdf()

    {
        $products = \DB::select('SELECT categories.nombre AS categoryNombre, products.id, products.nombre,  products.precio, products.cantidad,  products.stock_min, products.stock_max, products.descripcion , products.foto, products.talla, products.envio, products.estado

        FROM products, categories

        WHERE products.category_id = categories.id');

         $i = 1;

         $date = date('d-m-Y');
        $dompdf = PDF::loadView('pdf.productos', compact('products', 'i','date'));
     



        return $dompdf->stream('products.pdf');
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


?>