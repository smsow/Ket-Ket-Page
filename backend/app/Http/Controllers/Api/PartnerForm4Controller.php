<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnerForm4Request;
use App\Http\Requests\UpdatePartnerForm4Request;
use App\Models\PartnerForm4;
use Illuminate\Http\JsonResponse;

class PartnerForm4Controller extends Controller
{
    // Liste tous les enregistrements
    public function index(): JsonResponse
    {
        $partners = PartnerForm4::all();

        if ($partners->isEmpty()) {
            return response()->json([
                'message' => 'Aucun enregistrement trouvé.',
            ], 404);
        }

        return response()->json([
            'message' => 'Liste des enregistrements récupérée avec succès.',
            'data' => $partners
        ], 200);
    }

    // Crée un nouvel enregistrement
    public function store(StorePartnerForm4Request $request): JsonResponse
    {
        $partnerForm4 = PartnerForm4::create($request->validated());

        return response()->json([
            'message' => 'Enregistrement créé avec succès.',
            'data' => $partnerForm4
        ], 201);
    }

    // Affiche un enregistrement spécifique
    public function show($id): JsonResponse
    {
        $partnerForm4 = PartnerForm4::find($id);

        if (!$partnerForm4) {
            return response()->json([
                'message' => 'Enregistrement non trouvé.',
            ], 404);
        }

        return response()->json([
            'message' => 'Enregistrement récupéré avec succès.',
            'data' => $partnerForm4
        ], 200);
    }

    // Met à jour un enregistrement existant
    public function update(UpdatePartnerForm4Request $request, $id): JsonResponse
    {
        $partnerForm4 = PartnerForm4::find($id);

        if (!$partnerForm4) {
            return response()->json([
                'message' => 'Enregistrement non trouvé.',
            ], 404);
        }

        $partnerForm4->update($request->validated());

        return response()->json([
            'message' => 'Enregistrement mis à jour avec succès.',
            'data' => $partnerForm4
        ], 200);
    }

    // Supprime un enregistrement
    public function destroy($id): JsonResponse
    {
        $partnerForm4 = PartnerForm4::find($id);

        if (!$partnerForm4) {
            return response()->json([
                'message' => 'Enregistrement non trouvé.',
            ], 404);
        }

        $partnerForm4->delete();

        return response()->json([
            'message' => 'Enregistrement supprimé avec succès.'
        ], 200);
    }
}
