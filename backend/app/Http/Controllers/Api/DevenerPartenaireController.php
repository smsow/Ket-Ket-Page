<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DevenerPartenaire;
use App\Http\Requests\StoreDevenerPartenaireRequest;
use App\Http\Requests\UpdateDevenerPartenaireRequest;

class DevenerPartenaireController extends Controller
{
    public function index()
    {
        $devenerPartenaires = DevenerPartenaire::all();
        return response()->json([
            'success' => true,
            'message' => 'Liste des partenaires récupérée avec succès.',
            'data' => $devenerPartenaires,
        ], 200);
    }

    public function store(StoreDevenerPartenaireRequest $request)
    {
        $devenerPartenaire = DevenerPartenaire::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Partenaire créé avec succès.',
            'data' => $devenerPartenaire,
        ], 201);
    }

    public function show($id)
    {
        $devenerPartenaire = DevenerPartenaire::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Partenaire récupéré avec succès.',
            'data' => $devenerPartenaire,
        ], 200);
    }

    public function update(UpdateDevenerPartenaireRequest $request, $id)
    {
        $devenerPartenaire = DevenerPartenaire::findOrFail($id);

        $devenerPartenaire->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Partenaire mis à jour avec succès.',
            'data' => $devenerPartenaire,
        ], 200);
    }

    public function destroy($id)
    {
        $devenerPartenaire = DevenerPartenaire::findOrFail($id);
        $devenerPartenaire->delete();

        return response()->json([
            'success' => true,
            'message' => 'Partenaire supprimé avec succès.',
        ], 204);
    }
}
