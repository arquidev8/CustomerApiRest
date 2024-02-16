<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|max:90',
          
        ]);

        $region = Region::create($validatedData);


        return response()->json([
            'success' => true,
            'data' => $region
        ],  200);
    }
}
