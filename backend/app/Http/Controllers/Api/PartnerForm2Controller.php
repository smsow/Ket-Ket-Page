<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnerForm2Request;
use App\Http\Requests\UpdatePartnerForm2Request;
use App\Models\PartnerForm2;
use Illuminate\Http\JsonResponse;

class PartnerForm2Controller extends Controller
{
    /**
     * Affiche la liste de tous les partenaires.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $partners = PartnerForm2::all();
        return response()->json([
            'message' => 'Partenaires récupérés avec succès.',
            'data' => $partners
        ]);
    }

    /**
     * Stocke un nouveau partenaire.
     *
     * @param StorePartnerForm2Request $request
     * @return JsonResponse
     */
    public function store(StorePartnerForm2Request $request): JsonResponse
    {
        $partner = PartnerForm2::create($request->validated());

        return response()->json([
            'message' => 'Partenaire créé avec succès.',
            'data' => $partner
        ], 201);
    }

    /**
     * Affiche un partenaire spécifique.
     *
     * @param PartnerForm2 $partner
     * @return JsonResponse
     */
    public function show(PartnerForm2 $partner): JsonResponse
    {
        return response()->json([
            'message' => 'Partenaire récupéré avec succès.',
            'data' => $partner
        ]);
    }

    /**
     * Met à jour un partenaire spécifique.
     *
     * @param UpdatePartnerForm2Request $request
     * @param PartnerForm2 $partner
     * @return JsonResponse
     */
    public function update(UpdatePartnerForm2Request $request, PartnerForm2 $partner): JsonResponse
    {
        $partner->update($request->validated());

        return response()->json([
            'message' => 'Partenaire mis à jour avec succès.',
            'data' => $partner
        ]);
    }

    /**
     * Supprime un partenaire spécifique.
     *
     * @param PartnerForm2 $partner
     * @return JsonResponse
     */
    public function destroy(PartnerForm2 $partner): JsonResponse
    {
        $partner->delete();
        return response()->json([
            'message' => 'Partenaire supprimé avec succès.'
        ], 204);
    }
}
