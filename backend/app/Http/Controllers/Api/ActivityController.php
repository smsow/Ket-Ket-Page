<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ActivityController extends Controller
{
    public function index(): JsonResponse
    {
        $activities = Activity::all();
        return response()->json([
            'message' => 'Activités récupérées avec succès.',
            'data' => $activities
        ], 200); // 200 OK
    }

    public function store(StoreActivityRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $activity = Activity::create($validatedData);
        return response()->json([
            'message' => 'Activité créée avec succès.',
            'data' => $activity
        ], 201); // 201 Created
    }

    public function show(int $id): JsonResponse
    {
        try {
            $activity = Activity::findOrFail($id);
            return response()->json([
                'message' => 'Activité récupérée avec succès.',
                'data' => $activity
            ], 200); // 200 OK
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Activité non trouvée.'
            ], 404); // 404 Not Found
        }
    }

    public function update(UpdateActivityRequest $request, int $id): JsonResponse
    {
        try {
            $activity = Activity::findOrFail($id);
            $validatedData = $request->validated();
            $activity->update($validatedData);
            return response()->json([
                'message' => 'Activité mise à jour avec succès.',
                'data' => $activity
            ], 200); // 200 OK
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Activité non trouvée.'
            ], 404); // 404 Not Found
        }
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $activity = Activity::findOrFail($id);
            $activity->delete();
            return response()->json([
                'message' => 'Activité supprimée avec succès.'
            ], 204); // 204 No Content
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Activité non trouvée.'
            ], 404); // 404 Not Found
        }
    }
}
