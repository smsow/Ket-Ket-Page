<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAbonnementRequest;
use App\Http\Requests\UpdateAbonnementRequest;
use App\Models\Abonnement;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function index()
    {
        // Fetch all abonnements
        $abonnements = Abonnement::all();

        // Check if any abonnements were found
        if ($abonnements->isEmpty()) {
            return response()->json([
                'message' => 'No abonnements found.',
                'data' => []
            ], 404);
        }

        // Return the list of abonnements with a success message
        return response()->json([
            'message' => 'Abonnements retrieved successfully.',
            'data' => $abonnements
        ], 200);
    }

    public function show($id)
    {
        $abonnement = Abonnement::findOrFail($id);
        return response()->json([
            'message' => 'Abonnement retrieved successfully.',
            'data' => $abonnement
        ], 200);
    }

    public function store(StoreAbonnementRequest $request)
    {
        $validated = $request->validated();

        $abonnement = Abonnement::create($validated);

        return response()->json([
            'message' => 'Abonnement created successfully.',
            'data' => $abonnement
        ], 201);
    }

    public function update(UpdateAbonnementRequest $request, $id)
    {
        $abonnement = Abonnement::findOrFail($id);

        $validated = $request->validated();

        $abonnement->update($validated);

        return response()->json([
            'message' => 'Abonnement updated successfully.',
            'data' => $abonnement
        ]);
    }

    public function destroy($id)
    {
        $abonnement = Abonnement::findOrFail($id);
        $abonnement->delete();

        return response()->json([
            'message' => 'Abonnement deleted successfully.'
        ], 204);
    }
}
