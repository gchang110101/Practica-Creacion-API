<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::orderBy('facultad', 'asc')
        ->orderBy('fecha_hora_inicio', 'desc')
        ->orderBy('fecha_hora_fin', 'desc')
        //->orderBy('deporte', 'asc')
        ->orderBy('tipo_evento', 'asc')
        ->orderBy('estado', 'asc')
        //->orderBy('capacidad', 'asc')
        //->orderBy('organizador', 'asc')
        ->get();

        return response()->json(
            [
                'status' => 'sucess',
                'data' => $eventos,
            ],
            200,
            [],
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
