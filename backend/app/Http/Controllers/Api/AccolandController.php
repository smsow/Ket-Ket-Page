<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccolandRequest;
use App\Http\Requests\UpdateAccolandRequest;
use App\Models\Accoland;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AccolandController extends Controller
{
    // Récupérer tous les Accolands
    public function index()
    {
        $accolands = Accoland::all(['description', 'image', 'description1', 'image1', 'description2', 'image2']); // Sélectionner les nouveaux champs également
        return response()->json([
            'message' => 'Accolands retrieved successfully.',
            'data' => $accolands
        ], Response::HTTP_OK);
    }


    // Créer un nouvel Accoland
    public function store(StoreAccolandRequest $request)
    {
        $validatedData = $request->validated();

        $accoland = Accoland::create($validatedData);

        return response()->json([
            'message' => 'Accoland created successfully.',
            'data' => $accoland->only(['description', 'image', 'description1', 'image1', 'description2', 'image2']) // Retourner tous les champs
        ], Response::HTTP_CREATED);
    }

    // Récupérer un Accoland par ID
    public function show($id)
    {
        try {
            $accoland = Accoland::findOrFail($id);
            return response()->json([
                'message' => 'Accoland retrieved successfully.',
                'data' => $accoland->only(['description', 'image', 'description1', 'image1', 'description2', 'image2']) // Retourner tous les champs
            ], Response::HTTP_OK);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Accoland not found.'
            ], Response::HTTP_NOT_FOUND);
        }
    }

    // Mettre à jour un Accoland par ID
    public function update(UpdateAccolandRequest $request, $id)
    {
        try {
            $accoland = Accoland::findOrFail($id);

            $validatedData = $request->validated();

            $accoland->update($validatedData);

            return response()->json([
                'message' => 'Accoland updated successfully.',
                'data' => $accoland->only(['description', 'image', 'description1', 'image1', 'description2', 'image2']) // Retourner tous les champs
            ], Response::HTTP_OK);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Accoland not found.'
            ], Response::HTTP_NOT_FOUND);
        }
    }

    // Supprimer un Accoland par ID
    public function destroy($id)
    {
        try {
            $accoland = Accoland::findOrFail($id);
            $accoland->delete();

            return response()->json([
                'message' => 'Accoland deleted successfully.'
            ], Response::HTTP_NO_CONTENT);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Accoland not found.'
            ], Response::HTTP_NOT_FOUND);
        }
    }
}
