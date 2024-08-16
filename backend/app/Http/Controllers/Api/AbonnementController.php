<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Abonnement;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function index()
    {
        $abonnements = Abonnement::all();
        return response()->json($abonnements);
    }

    public function show($id)
    {
        $abonnement = Abonnement::findOrFail($id);
        return response()->json($abonnement);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'duree' => 'required|numeric',
            'date_fin' => 'required|date',
            'date_creation' => 'required|date',
            'type' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'date_debut' => 'required|date',
        ]);

        $abonnement = Abonnement::create($validated);

        return response()->json($abonnement, 201);
    }

    public function update(Request $request, $id)
    {
        $abonnement = Abonnement::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'sometimes|required|string|max:255',
            'client_id' => 'sometimes|required|exists:clients,id',
            'service_id' => 'sometimes|required|exists:services,id',
            'duree' => 'sometimes|required|numeric',
            'date_fin' => 'sometimes|required|date',
            'date_creation' => 'sometimes|required|date',
            'type' => 'sometimes|required|string|max:255',
            'status' => 'sometimes|required|string|max:255',
            'date_debut' => 'sometimes|required|date',
        ]);

        $abonnement->update($validated);

        return response()->json($abonnement);
    }

    public function destroy($id)
    {
        $abonnement = Abonnement::findOrFail($id);
        $abonnement->delete();

        return response()->json(null, 204);
    }
}
