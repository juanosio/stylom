<?php

namespace App\Http\Controllers;

use App\Worker;
use App\User;
use Illuminate\Http\Request;

use Alert;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate();
        $i=1;

        return view('users.index', compact('users', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User;

        $user->email            = $request->correo;
        $user->password         = bcrypt($request->password);
        $user->name             = $request->nombre;
        $user->lastname         = $request->apellido;
        $user->identification   = $request->cedula;
        $user->telephone        = $request->telefono;
        $user->birthday         = $request->fecha_nacimiento;
        $user->direction        = $request->direccion;
        $user->role             = 'SECRETARIA';


        $vusers = \DB::select('SELECT * FROM users WHERE email = ?' , [$request->correo]);
            

        if ($vusers) {
            Alert::error('Este correo esta afiliado a un trabajador existente','¡Error en el registro!');
    
            return redirect()->route('empleados.create');
            die();
     }

     $vusers2 = \DB::select('SELECT * FROM users WHERE identification = ?' , [$request->cedula]);
            

     if ($vusers2) {
         Alert::error('Esta cedula esta afiliada a un trabajador existente','¡Error en el registro!');
 
         return redirect()->route('empleados.create');
         die();
  }

  $vusers3 = \DB::select('SELECT * FROM users WHERE telephone = ?' , [$request->telefono]);
            

  if ($vusers3) {
      Alert::error('Este telefono esta afiliado a un trabajador existente','¡Error en el registro!');

      return redirect()->route('empleados.create');
      die();
}







        $user->save();

        



       

        
        

        Alert::success('Operación realizada con éxito','¡Empleado registrado!');

        return redirect()->route('empleados.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        //
    }
}
