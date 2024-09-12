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

        try {
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
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $evento_request_body = $request->all();

            $evento_post = Evento::create($evento_request_body);

            return response()->json([
                'status' => 'se guardó el evento satisfactoriamente',
                'request_date_time' => date('Y-m-d H:i:s'),
                'data' => $evento_post
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'data' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $value)
    {
        try {
            $cad = '%' . $value . '%';

            $eventos_search_by_title_description = Evento::where('titulo', 'LIKE', $cad)
                ->orWhere('descripcion', 'LIKE', $cad)
                ->get();

            return response()->json([
                'status' => 'succes',
                'request_date_time' => date('Y-m-d H:i:s'),
                'data' => $eventos_search_by_title_description
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'data' => $e->getMessage()
            ]);
        }
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
