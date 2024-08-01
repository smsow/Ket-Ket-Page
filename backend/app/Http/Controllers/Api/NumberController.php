<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNumberRequest;
use App\Http\Requests\UpdateNumberRequest;
use App\Models\Number;

class NumberController extends Controller
{
    /**
     * Affiche une liste de tous les enregistrements.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $numbers = Number::all();
        return response()->json([
            'message' => 'Liste des nombres récupérée avec succès.',
            'data' => $numbers
        ]);
    }

    /**
     * Stocke un nouvel enregistrement.
     *
     * @param  \App\Http\Requests\StoreNumberRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreNumberRequest $request)
    {
        $number = Number::create($request->validated());

        return response()->json([
            'message' => 'Nombre créé avec succès.',
            'data' => $number
        ], 201);
    }

    /**
     * Affiche un enregistrement spécifique.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Number $number)
    {
        return response()->json([
            'message' => 'Nombre récupéré avec succès.',
            'data' => $number
        ]);
    }

    /**
     * Met à jour un enregistrement spécifique.
     *
     * @param  \App\Http\Requests\UpdateNumberRequest  $request
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateNumberRequest $request, Number $number)
    {
        $number->update($request->validated());

        return response()->json([
            'message' => 'Nombre mis à jour avec succès.',
            'data' => $number
        ]);
    }

    /**
     * Supprime un enregistrement spécifique.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Number $number)
    {
        $number->delete();

        return response()->json([
            'message' => 'Nombre supprimé avec succès.'
        ]);
    }
}
