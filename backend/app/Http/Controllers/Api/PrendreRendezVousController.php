<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PrendreRendezVous;
use App\Http\Requests\StorePrendreRendezVousRequest;
use App\Http\Requests\UpdatePrendreRendezVousRequest;

class PrendreRendezVousController extends Controller
{
    public function index()
    {
        $rendezVous = PrendreRendezVous::all();

        return response()->json([
            'success' => true,
            'message' => 'Liste des rendez-vous récupérée avec succès.',
            'data' => $rendezVous,
        ], 200);
    }

    public function store(StorePrendreRendezVousRequest $request)
    {
        $rendezVous = PrendreRendezVous::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Rendez-vous pris avec succès.',
            'data' => $rendezVous,
        ], 201);
    }

    public function show($id)
    {
        $rendezVous = PrendreRendezVous::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Détails du rendez-vous récupérés avec succès.',
            'data' => $rendezVous,
        ], 200);
    }

    public function update(UpdatePrendreRendezVousRequest $request, $id)
    {
        $rendezVous = PrendreRendezVous::findOrFail($id);

        $rendezVous->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Rendez-vous mis à jour avec succès.',
            'data' => $rendezVous,
        ], 200);
    }

    public function destroy($id)
    {
        $rendezVous = PrendreRendezVous::findOrFail($id);
        $rendezVous->delete();

        return response()->json([
            'success' => true,
            'message' => 'Rendez-vous supprimé avec succès.',
        ], 204);
    }
}
