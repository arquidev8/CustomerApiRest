<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Commune;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        try {
            $customers = Customer::all();
            return response()->json([
                'success' => true,
                'data' => $customers
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener los customers'
            ],  500);
        }
    }

    public function store(Request $request)
    {
     
        $rules = [
            'dni' => 'required|unique:customers', 
            'id_reg' => 'exists:regions,id_reg', 
            'id_com' => 'exists:communes,id_com', 
            'email' => 'required|email|unique:customers',
            'name' => 'required', 
            'last_name' => 'required', 
            'address' => 'nullable', 
            'date_reg' => 'required|date', 
            'status' => 'required|in:A,I,trash', 
        ];

    
        $validatedData = $request->validate($rules);

        try {
        
            $region = Region::firstOrCreate(['id_reg' => $validatedData['id_reg']], ['description' => 'Descripción de la región']);
            $commune = Commune::firstOrCreate(['id_com' => $validatedData['id_com'], 'id_reg' => $region->id_reg], ['description' => 'Descripción de la comuna']);

            $customer = Customer::create($validatedData);
            return response()->json([
                'success' => true,
                'data' => $customer
            ],   200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al crear el customer'
            ],   500);
        }
        }

    public function show($identifier)
    {
        try {
            $customer = Customer::where('dni', $identifier)->orWhere('email', $identifier)->firstOrFail();
            return response()->json([
                'success' => true,
                'data' => $customer
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Customer no encontrado'
            ],  404);
        }
    }

    public function destroy($dni)
    {
        try {
            $customer = Customer::where('dni', $dni)->firstOrFail();
            DB::table('customers')->where('dni', $dni)
                ->update(['deleted_at' => now()]);
      
            DB::table('customers')->where('dni', $dni)
                ->update(['status' => 'trash']);
            return response()->json([
                'success' => true,
                'message' => 'Customer eliminado correctamente'
            ],  200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Registro no existe'
            ],  404);
        }
    }





}
