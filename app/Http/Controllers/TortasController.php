<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Torta;

class TortasController extends Controller
{
    public function listTortas()
    {
        $tortas = Torta::all();
        return response()->json([
            'tortas' => $tortas,
            'status' => true
        ]);
    }

    public function guardarTorta(Request $request)
    {
        try {
            $torta = new Torta();
            $torta->nombre = $request->input('nombre');
            $torta->descripcion = $request->input('descripcion');
            $torta->precio = $request->input('precio');
            $torta->cantidad = $request->input('cantidad');
            $torta->sabor = $request->input('sabor');
            $torta->tamaño = $request->input('tamaño');
            $torta->tipo = $request->input('tipo');
            $torta->fecha_creacion = $request->input('fecha_creacion');
    
            $torta->save();
    
            return response()->json([
                'mensaje' => 'Torta creada correctamente',
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al guardar la torta',
                'error' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }

    public function buscarTorta($id)
    {
        try {
            $torta = Torta::findOrFail($id);
            return response()->json([
                'torta_buscada' => $torta,
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Torta no encontrada',
                'error' => $e->getMessage(),
                'status' => false
            ], 404);
        }
    }

    public function actualizarTorta(Request $request, $id)
    {
        try {
            $torta = Torta::findOrFail($id);
    
            $torta->nombre = $request->input('nombre');
            $torta->descripcion = $request->input('descripcion');
            $torta->precio = $request->input('precio');
            $torta->cantidad = $request->input('cantidad');
            $torta->sabor = $request->input('sabor');
            $torta->tamaño = $request->input('tamaño');
            $torta->tipo = $request->input('tipo');
            $torta->fecha_creacion = $request->input('fecha_creacion');
    
            $torta->save();
    
            return response()->json([
                'mensaje' => 'Torta actualizada correctamente',
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al actualizar la torta',
                'error' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }
    public function eliminarTorta($id)
    {
        try {
            $torta = Torta::findOrFail($id);
            $torta->delete();
    
            return response()->json([
                'mensaje' => 'Torta eliminada correctamente',
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al eliminar la torta',
                'error' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }
}
