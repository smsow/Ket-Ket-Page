<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaiementRequest;
use App\Http\Requests\UpdatePaiementRequest;
use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index()
    {
        $paiements = Paiement::all();
        return response()->json([
            'message' => 'Paiements retrieved successfully.',
            'data' => $paiements
        ], 200);
    }

    public function show($id)
    {
        $paiement = Paiement::findOrFail($id);
        return response()->json([
            'message' => 'Paiement retrieved successfully.',
            'data' => $paiement
        ], 200);
    }

    public function store(StorePaiementRequest $request)
    {
        $validated = $request->validated();
        $paiement = Paiement::create($validated);
        return response()->json([
            'message' => 'Paiement created successfully.',
            'data' => $paiement
        ], 201);
    }

    public function update(UpdatePaiementRequest $request, $id)
    {
        $paiement = Paiement::findOrFail($id);
        $validated = $request->validated();
        $paiement->update($validated);
        return response()->json([
            'message' => 'Paiement updated successfully.',
            'data' => $paiement
        ]);
    }

    public function destroy($id)
    {
        $paiement = Paiement::findOrFail($id);
        $paiement->delete();
        return response()->json([
            'message' => 'Paiement deleted successfully.'
        ], 204);
    }
}
