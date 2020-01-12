<?php

namespace App\Http\Controllers;

use App\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Detalle;
use App\User;
use App\Bitacora;


class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
            
        $compra = \DB::select('SELECT users.name AS userNombre, users.lastname AS userApellido, users.identification AS userCedula, banks.name AS bankNombre, 
        compras.id, compras.referencia,  compras.totalC, compras.estado_de_compra, compras.banco_emisor

        FROM compras, users, banks

        WHERE compras.user_id = users.id AND compras.banco_emisor = banks.id');



       
        $i = 1;
       return view ('sales/index', compact('compra', 'i'));
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //  return $request->all();
        $compra = new Compra;

        $compra->user_id = $request->user_id;
        $compra->referencia = $request->referencia;
        $compra->totalC = $request->totalC;
        $compra->estado_de_compra = $request->estado_de_compra;
        $compra->banco_emisor = $request->banco_emisor;
        $compra->save();

        
        $detalle = new Detalle;

        $detalle->product_id = $request->product_id;
        $detalle->compra_id = $compra->id;
        $detalle->precio_unitario = $request->precio_unitario;

        
       
        $detalle->save();

        return redirect()->route('purchase.index');

  

    }


    public function aprobar(Request $request){

        $compraUpdate = Compra::findOrFail($request->id_venta);

        $compraUpdate->estado_de_compra = $request->estado_de_compra;
        $compraUpdate->save();
        
      
        $bitacoras = new Bitacora;

        $bitacoras->user =  Auth::user()->name;
        $bitacoras->lastname =  Auth::user()->lastname;
        $bitacoras->role =  Auth::user()->role;
        $bitacoras->action = 'Ha aprobado una venta';
        $bitacoras->save();

      return redirect()->route('compra.index');


    }

    public function rechazar(Request $request){
        

        $compraUpdate2 = Compra::findOrFail($request->id_venta2);

        $compraUpdate2->estado_de_compra = $request->estado_de_compra;
        $compraUpdate2->save();
        
      
        $bitacoras = new Bitacora;

        $bitacoras->user =  Auth::user()->name;
        $bitacoras->lastname =  Auth::user()->lastname;
        $bitacoras->role =  Auth::user()->role;
        $bitacoras->action = 'Ha rechazado una venta';
        $bitacoras->save();

      return redirect()->route('compra.index');


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra = App\Compra::findOrFail($id);
        return view('sales/index', compact('compra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        //
    }
}
