<?php


namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RegionController extends Controller
{
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'description' => 'required|max:90',
          
    //     ]);

    //     $region = Region::create($validatedData);


    //     return response()->json([
    //         'success' => true,
    //         'data' => $region
    //     ],  200);
    // }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'description' => 'required|max:90',
            ]);

            $region = Region::create($validatedData);

            return response()->json([
                'success' => true,
                'data' => $region
            ], 200);
        } catch (ValidationException $e) {
     
            return response()->json([
                'success' => false,
                'message' => 'Error de validación',
                'errors' => $e->errors(),
            ], 422);
        }
    }
}
