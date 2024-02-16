<?php


namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CommuneController extends Controller
{
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'id_reg' => 'required|integer|exists:regions,id_reg',
        //     'description' => 'required|max:90',
     
        // ]);

        // $commune = Commune::create($validatedData);

        // return response()->json([
        //     'success' => true,
        //     'data' => $commune
        // ],  200);

        try {
            $validatedData = $request->validate([
                'id_reg' => 'required|integer|exists:regions,id_reg',
                'description' => 'required|max:90',
            ]);

            $commune = Commune::create($validatedData);

            return response()->json([
                'success' => true,
                'data' => $commune
            ], 200);
        } catch (ValidationException $e) {
            // Manejar la excepción de validación
            return response()->json([
                'success' => false,
                'message' => 'Error de validación',
                'errors' => $e->errors(),
            ], 422);
        }
    }
}
