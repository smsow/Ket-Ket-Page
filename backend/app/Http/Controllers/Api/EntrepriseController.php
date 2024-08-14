<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;
use App\Models\Entreprise;
use Illuminate\Http\JsonResponse;

class EntrepriseController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::all();
        return response()->json(['message' => 'Liste des entreprises récupérée avec succès.', 'data' => $entreprises], 200);
    }

    public function store(StoreEntrepriseRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        // Convert images array to JSON if it exists
        if (isset($validatedData['images']) && is_array($validatedData['images'])) {
            $validatedData['images'] = json_encode($validatedData['images']);
        } else {
            $validatedData['images'] = null; // or '' if you prefer an empty string
        }

        // Create the Entreprise record
        $entreprise = Entreprise::create($validatedData);

        return response()->json(['message' => 'Entreprise créée avec succès.', 'data' => $entreprise], 201);
    }
    public function show($id)
    {
        $entreprise = Entreprise::findOrFail($id);
        return response()->json(['message' => 'Détails de l\'entreprise récupérés avec succès.', 'data' => $entreprise], 200);
    }

    public function update(UpdateEntrepriseRequest $request, $id)
    {
        $entreprise = Entreprise::findOrFail($id);
        $entreprise->update($request->validated());
        return response()->json(['message' => 'Entreprise mise à jour avec succès.', 'data' => $entreprise], 200);
    }

    public function destroy($id)
    {
        Entreprise::destroy($id);
        return response()->json(['message' => 'Entreprise supprimée avec succès.'], 204);
    }
}
