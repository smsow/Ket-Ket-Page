<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartenaireSportRequest;
use App\Http\Requests\UpdatePartenaireSportRequest;
use App\Models\PartenaireSport;

class PartenaireSportController extends Controller
{
    public function index()
    {
        $partenaires = PartenaireSport::all();
        return response()->json(['message' => 'Liste des partenaires sportifs récupérée avec succès.', 'data' => $partenaires], 200);
    }

    public function store(StorePartenaireSportRequest $request)
    {
        // Valider et récupérer les données
        $data = $request->validated();

        // Créer un nouveau partenaire sportif
        $partenaire = PartenaireSport::create($data);

        return response()->json(['message' => 'Partenaire sportif créé avec succès.', 'data' => $partenaire], 201);
    }
    public function show($id)
    {
        $partenaire = PartenaireSport::findOrFail($id);
        return response()->json(['message' => 'Détails du partenaire sportif récupérés avec succès.', 'data' => $partenaire], 200);
    }

    public function update(UpdatePartenaireSportRequest $request, $id)
    {
        $partenaire = PartenaireSport::findOrFail($id);

        // Valider et récupérer les données
        $data = $request->validated();

        // Mettre à jour le partenaire sportif
        $partenaire->update($data);

        return response()->json(['message' => 'Partenaire sportif mis à jour avec succès.', 'data' => $partenaire], 200);
    }

    public function destroy($id)
    {
        PartenaireSport::destroy($id);
        return response()->json(['message' => 'Partenaire sportif supprimé avec succès.'], 204);
    }
}
