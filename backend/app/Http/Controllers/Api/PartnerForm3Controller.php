<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePartnerForm3Request;
use App\Http\Requests\StorePartnerForm3Request;
use App\Models\PartnerForm3;
use Illuminate\Http\Request;

class PartnerForm3Controller extends Controller
{
    /**
     * Affiche la liste des enregistrements de PartnerForm3.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json([
            'message' => 'Liste des enregistrements récupérée avec succès.',
            'data' => PartnerForm3::all(),
        ]);
    }

    /**
     * Crée un nouvel enregistrement de PartnerForm3.
     *
     * @param \App\Http\Requests\StorePartnerForm3Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StorePartnerForm3Request $request)
    {
        $partnerForm3 = PartnerForm3::create($request->validated());

        return response()->json([
            'message' => 'Enregistrement créé avec succès.',
            'data' => $partnerForm3,
        ], 201);
    }

    /**
     * Affiche un enregistrement spécifique de PartnerForm3 par son ID.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $partnerForm3 = PartnerForm3::findOrFail($id);

        return response()->json([
            'message' => 'Enregistrement récupéré avec succès.',
            'data' => $partnerForm3,
        ]);
    }

    /**
     * Met à jour un enregistrement existant de PartnerForm3.
     *
     * @param \App\Http\Requests\UpdatePartnerForm3Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdatePartnerForm3Request $request, $id)
    {
        $partnerForm3 = PartnerForm3::findOrFail($id);
        $partnerForm3->update($request->validated());

        return response()->json([
            'message' => 'Enregistrement mis à jour avec succès.',
            'data' => $partnerForm3,
        ]);
    }

    /**
     * Supprime un enregistrement spécifique de PartnerForm3 par son ID.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $partnerForm3 = PartnerForm3::findOrFail($id);
        $partnerForm3->delete();

        return response()->json([
            'message' => 'Enregistrement supprimé avec succès.',
        ], 204);
    }
}
