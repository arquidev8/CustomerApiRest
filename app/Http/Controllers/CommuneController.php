<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commune;

class CommuneController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_reg' => 'required|integer|exists:regions,id_reg',
            'description' => 'required|max:90',
     
        ]);

        $commune = Commune::create($validatedData);

        return response()->json([
            'success' => true,
            'data' => $commune
        ],  200);
    }
}
