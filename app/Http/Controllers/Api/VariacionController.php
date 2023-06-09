<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Variacion;

use App\Http\Resources\VariacionResource;

 use App\Http\Requests\VariacionRequest;

class VariacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $variaciones =  Variacion::all();
       return VariacionResource::collection($variaciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VariacionRequest $request)
    {
        return new VariacionResource(Variacion::create($request->all()));

    }

    /**
     * Display the specified resource.
     */
    public function show(Variacion $variacion)
    {
        return new VariacionResource($variacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VariacionRequest $request, Variacion $variacion)
    {
        $variacion->update($request->all());
        return new VariacionResource($variacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
