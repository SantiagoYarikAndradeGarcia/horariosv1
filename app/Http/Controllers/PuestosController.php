<?php

namespace App\Http\Controllers;

use App\Models\Puestos;
use Illuminate\Http\Request;

class PuestosController extends Controller
{
    public function index()
    {
        $puestos= Puestos::paginate(5);
        return view("Puestos/index",compact("puestos"));

    }


    public function create()
    {

        $puestos= Puestos::paginate(5);
        return view("Puestos/create",compact("puestos"));
    }

 
    public function store(Request $request)
    {
        Puestos::create($request->all());
        return redirect()->route('Puestos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Puestos $puesto)
    {
        $puestos=Puestos::Paginate(5);
        return view("Puestos.show",compact('puestos','puesto'));
    }

   
    public function edit(Puestos $puesto)
    {
        $puestos=Puestos::Paginate(5);
        return view("Puestos.edit",compact('puestos','puesto'));
    }

    
    public function update(Request $request, Puestos $puesto)
    {
        $puesto->update($request->all());
        return redirect()->route('Puestos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puestos $puesto)
    {
        $puesto->delete();
        return redirect()->route('Puestos.index');
    }
}
