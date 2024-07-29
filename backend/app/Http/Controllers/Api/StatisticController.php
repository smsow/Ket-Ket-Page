<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStatisticRequest;
use App\Http\Requests\UpdateStatisticRequest;
use App\Models\Statistic;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StatisticController extends Controller
{
    public function index(): JsonResponse
    {
        $statistics = Statistic::all();
        return response()->json([
            'message' => 'Statistiques récupérées avec succès.',
            'data' => $statistics
        ], 200); // 200 OK
    }

    public function store(StoreStatisticRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $statistic = Statistic::create($validatedData);
        return response()->json([
            'message' => 'Statistique créée avec succès.',
            'data' => $statistic
        ], 201); // 201 Created
    }

    public function show(int $id): JsonResponse
    {
        try {
            $statistic = Statistic::findOrFail($id);
            return response()->json([
                'message' => 'Statistique récupérée avec succès.',
                'data' => $statistic
            ], 200); // 200 OK
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Statistique non trouvée.'
            ], 404); // 404 Not Found
        }
    }

    public function update(UpdateStatisticRequest $request, int $id): JsonResponse
    {
        try {
            $statistic = Statistic::findOrFail($id);
            $validatedData = $request->validated();
            $statistic->update($validatedData);
            return response()->json([
                'message' => 'Statistique mise à jour avec succès.',
                'data' => $statistic
            ], 200); // 200 OK
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Statistique non trouvée.'
            ], 404); // 404 Not Found
        }
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $statistic = Statistic::findOrFail($id);
            $statistic->delete();
            return response()->json([
                'message' => 'Statistique supprimée avec succès.'
            ], 204); // 204 No Content
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Statistique non trouvée.'
            ], 404); // 404 Not Found
        }
    }
}
