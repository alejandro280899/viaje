<?php

namespace App\Http\Controllers;

use App\Http\Requests\ViajeRequest;
use App\Models\Destino;
use App\Models\Viaje;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ViajeController extends Controller
{
    public function index(Request $request): View
    {
        $viajes = Viaje::paginate();
        return view('viaje.index', compact('viajes'))
        ->with('i', ($request->input('page', 1) - 1) * $viajes->perPage());
    }

    /**
     * Show the form for creating a new resource 
     */
    public function create(): View
    {
        $viaje = new Viaje();
        // dd(isEmpty($viaje->toArray()));
        $destinos = Destino::all();
        return view('viaje.create', compact('viaje','destinos'));
    }
     
    /**
     * Store a newly created resource in storage.
     */
    public function store(ViajeRequest $request): RedirectResponse
    {
        Viaje::create($request->validated());
        return Redirect::route('viajes.index')
        ->with('success', 'viaje created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
{
    $viaje = Viaje::find($id);
    return view('viaje.show', compact('viaje'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $viaje = Viaje::find($id);
        $destinos = Destino::all();
        return view('viaje.edit', compact('viaje','destinos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ViajeRequest $request, Viaje $viaje): RedirectResponse
{
    $viaje->update($request->validated());
    return Redirect::route('viajes.index')
        ->with('success', 'viaje actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Viaje::find($id)->delete();
        return Redirect::route('viajes.index')
        ->with('success', 'viaje deleted successfully.');
    }
}
