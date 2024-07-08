<?php

namespace App\Http\Controllers;

use App\Http\Requests\destinoRequest;
use App\Models\Destino;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DestinoController extends Controller
{
    public function index(Request $request): View
    {
        $destinos = Destino::paginate();
        return view('destino.index', compact('destinos'))
        ->with('i', ($request->input('page', 1) - 1) * $destinos->perPage());
    }

    /**
     * Show the form for creating a new resource 
     */
    public function create(): View
    {
        $destino = new Destino();
        // dd(isEmpty($pago->toArray()));
        return view('destino.create', compact('destino'));
    }
     
    /**
     * Store a newly created resource in storage.
     */
    public function store(DestinoRequest $request): RedirectResponse
    {
        Destino::create($request->validated());
        return Redirect::route('destinos.index')
        ->with('success', 'Destino created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
{
    $destino = Destino::find($id);
    return view('destino.show', compact('destino'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $destino = Destino::find($id);
        return view('destino.edit', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(destinoRequest $request,$id): RedirectResponse
{
    $destino = Destino::find($id);
    $destino->update($request->validated());
    return Redirect::route('destinos.index')
        ->with('success', 'Destino actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Destino::find($id)->delete();
        return Redirect::route('destinos.index')
        ->with('success', 'Destino deleted successfully.');
    }
}
