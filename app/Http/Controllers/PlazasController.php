<?php

namespace App\Http\Controllers;

use App\Models\Plazas;
use Illuminate\Http\Request;

class PlazasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plazas= Plazas::get();
        return view("Plazas/index",compact("plazas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Plazas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Plazas $plaza)
    {
        return view("Plazas.show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plazas $plaza)
    {
        return view("Plazas.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plazas $plaza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plazas $plaza)
    {
        return view("Plazas.delete");
    }
}
