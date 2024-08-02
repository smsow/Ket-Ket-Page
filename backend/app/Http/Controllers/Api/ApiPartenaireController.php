<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartenaireRequest;
use App\Http\Requests\UpdatePartenaireRequest;
use App\Models\Partenaire;
use Illuminate\Http\Request;

class ApiPartenaireController extends Controller
{
    /**
     * Affiche une liste des partenaires.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $partenaires = Partenaire::all();
        return response()->json([
            'message' => 'Partenaires récupérés avec succès.',
            'data' => $partenaires
        ]);
    }

    /**
     * Stocke un nouveau partenaire.
     *
     * @param \App\Http\Requests\StorePartenaireRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StorePartenaireRequest $request)
    {
        $partenaire = Partenaire::create($request->validated());
        return response()->json([
            'message' => 'Partenaire créé avec succès.',
            'data' => $partenaire
        ], 201);
    }

    /**
     * Affiche un partenaire spécifique.
     *
     * @param \App\Models\Partenaire $partenaire
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Partenaire $partenaire)
    {
        return response()->json([
            'message' => 'Partenaire récupéré avec succès.',
            'data' => $partenaire
        ]);
    }

    /**
     * Met à jour un partenaire spécifique.
     *
     * @param \App\Http\Requests\UpdatePartenaireRequest $request
     * @param \App\Models\Partenaire $partenaire
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdatePartenaireRequest $request, Partenaire $partenaire)
    {
        $partenaire->update($request->validated());
        return response()->json([
            'message' => 'Partenaire mis à jour avec succès.',
            'data' => $partenaire
        ]);
    }

    /**
     * Supprime un partenaire spécifique.
     *
     * @param \App\Models\Partenaire $partenaire
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Partenaire $partenaire)
    {
        $partenaire->delete();
        return response()->json([
            'message' => 'Partenaire supprimé avec succès.'
        ]);
    }
}
