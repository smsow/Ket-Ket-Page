<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStaticDecouverteRequest;
use App\Http\Requests\UpdateStaticDecouverteRequest;
use App\Models\StaticDecouverte;

class StaticDecouverteController extends Controller
{
    public function index()
    {
        $decouvertes = StaticDecouverte::all();
        return response()->json([
            'message' => 'Découvertes récupérées avec succès.',
            'data' => $decouvertes
        ]);
    }

    public function store(StoreStaticDecouverteRequest $request)
    {
        $decouverte = StaticDecouverte::create($request->validated());

        return response()->json([
            'message' => 'Découverte créée avec succès.',
            'data' => $decouverte
        ], 201);
    }

    public function show(StaticDecouverte $staticDecouverte)
    {
        return response()->json([
            'message' => 'Découverte récupérée avec succès.',
            'data' => $staticDecouverte
        ]);
    }

    public function update(UpdateStaticDecouverteRequest $request, StaticDecouverte $staticDecouverte)
    {
        $staticDecouverte->update($request->validated());

        return response()->json([
            'message' => 'Découverte mise à jour avec succès.',
            'data' => $staticDecouverte
        ]);
    }

    public function destroy(StaticDecouverte $staticDecouverte)
    {
        $staticDecouverte->delete();

        return response()->json([
            'message' => 'Découverte supprimée avec succès.'
        ]);
    }
}
