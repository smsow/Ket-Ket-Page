<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;
use App\Models\Entreprise;
use Illuminate\Http\JsonResponse;

class EntrepriseController extends Controller
{
    public function index(): JsonResponse
    {
        $entreprises = Entreprise::all();
        return response()->json([
            'message' => 'Liste des entreprises récupérée avec succès.',
            'data' => $entreprises
        ], 200);
    }

    public function store(StoreEntrepriseRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        // Création de l'entreprise
        $entreprise = Entreprise::create($validatedData);

        // Réponse JSON
        return response()->json([
            'message' => 'Entreprise créée avec succès.',
            'data' => $entreprise->only([
                'nom',
                'numero',
                'siege',
                'secteur_activite',
                'nombre_employes',
                'quartier',
                'date_creation',
                'date_modification',
                'latitude',
                'longitude',
                'adresse_id', // Correction ici pour inclure 'adresse_id'
                'contact_id',
                'created_at',
                'updated_at',
                'id'
            ]),
        ], 201);
    }

    public function show($id): JsonResponse
    {
        $entreprise = Entreprise::findOrFail($id);
        return response()->json([
            'message' => 'Détails de l\'entreprise récupérés avec succès.',
            'data' => $entreprise
        ], 200);
    }

    public function update(UpdateEntrepriseRequest $request, $id): JsonResponse
    {
        $entreprise = Entreprise::findOrFail($id);
        $entreprise->update($request->validated());

        return response()->json([
            'message' => 'Entreprise mise à jour avec succès.',
            'data' => $entreprise->only([
                'nom',
                'numero',
                'siege',
                'secteur_activite',
                'nombre_employes',
                'quartier',
                'date_creation',
                'date_modification',
                'latitude',
                'longitude',
                'adresse_id', // Correction ici pour inclure 'adresse_id'
                'contact_id',
                'updated_at',
                'id'
            ]),
        ], 200);
    }

    public function destroy($id): JsonResponse
    {
        Entreprise::destroy($id);
        return response()->json([
            'message' => 'Entreprise supprimée avec succès.'
        ], 204);
    }
}
