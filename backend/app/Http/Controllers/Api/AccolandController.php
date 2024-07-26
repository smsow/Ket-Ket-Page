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
        $accolands = Accoland::all(); // Sélectionner uniquement description et image
        return response()->json([
            'message' => 'Accolands retrieved successfully.',
            'data' => $accolands
        ], Response::HTTP_OK);
    }
    

    // Créer un nouvel Accoland
    public function store(StoreAccolandRequest $request)
    {
        $request->validate([
            'description' => 'required|string|max:1000', // Validation for description
            'image' => 'required|string|max:255', // Adjust validation if not using URLs
        ]);

        $accoland = Accoland::create([
            'description' => $request->description,
            'image' => $request->image, // Ensure proper handling of the image path or URL
        ]);

        return response()->json([
            'message' => 'Accoland created successfully.',
            'data' => $accoland->only(['description', 'image']) // Return only description and image
        ], Response::HTTP_CREATED);
    }

    // Récupérer un Accoland par ID
    public function show($id)
    {
        try {
            $accoland = Accoland::findOrFail($id);
            return response()->json([
                'message' => 'Accoland retrieved successfully.',
                'data' => $accoland->only(['description', 'image']) // Retourner uniquement description et image
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

            $request->validate([
                'description' => 'sometimes|string|max:1000', // Validation pour description
                'image' => 'sometimes|string', // Validation pour image
            ]);

            $data = $request->only(['description']);

            if ($request->has('image')) {
                $data['image'] = $request->image; // Assurez-vous de gérer correctement le chemin d'image
            }

            $accoland->update($data);

            return response()->json([
                'message' => 'Accoland updated successfully.',
                'data' => $accoland->only(['description', 'image']) // Retourner uniquement description et image
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
