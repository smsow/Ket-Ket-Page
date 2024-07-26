<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdvantageRequest;
use App\Http\Requests\UpdateAdvantageRequest;
use App\Models\Advantage;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AdvantageController extends Controller
{
    public function index(): JsonResponse
    {
        $advantages = Advantage::all();
        return response()->json([
            'message' => 'Avantages récupérés avec succès.',
            'data' => $advantages
        ], 200); // 200 OK
    }

    public function store(StoreAdvantageRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $advantage = Advantage::create($validatedData);
        return response()->json([
            'message' => 'Avantage créé avec succès.',
            'data' => $advantage
        ], 201); // 201 Created
    }

    public function show(int $id): JsonResponse
    {
        try {
            $advantage = Advantage::findOrFail($id);
            return response()->json([
                'message' => 'Avantage récupéré avec succès.',
                'data' => $advantage
            ], 200); // 200 OK
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Avantage non trouvé.'
            ], 404); // 404 Not Found
        }
    }

    public function update(UpdateAdvantageRequest $request, int $id): JsonResponse
    {
        try {
            $advantage = Advantage::findOrFail($id);
            $validatedData = $request->validated();
            $advantage->update($validatedData);
            return response()->json([
                'message' => 'Avantage mis à jour avec succès.',
                'data' => $advantage
            ], 200); // 200 OK
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Avantage non trouvé.'
            ], 404); // 404 Not Found
        }
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $advantage = Advantage::findOrFail($id);
            $advantage->delete();
            return response()->json([
                'message' => 'Avantage supprimé avec succès.'
            ], 204); // 204 No Content
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Avantage non trouvé.'
            ], 404); // 404 Not Found
        }
    }
}
