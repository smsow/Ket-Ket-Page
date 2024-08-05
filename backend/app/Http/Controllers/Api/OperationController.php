<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Operation;
use App\Http\Requests\StoreOperationRequest;
use App\Http\Requests\UpdateOperationRequest;
use Illuminate\Http\JsonResponse;

class OperationController extends Controller
{
    public function index(): JsonResponse
    {
        $operations = Operation::all();
        return response()->json([
            'message' => 'Opérations récupérées avec succès.',
            'data' => $operations
        ]);
    }

    public function store(StoreOperationRequest $request): JsonResponse
    {
        $operation = Operation::create($request->validated());

        return response()->json([
            'message' => 'Opération créée avec succès.',
            'data' => $operation
        ], 201);
    }

    public function show(Operation $operation): JsonResponse
    {
        return response()->json([
            'message' => 'Opération récupérée avec succès.',
            'data' => $operation
        ]);
    }

    public function update(UpdateOperationRequest $request, Operation $operation): JsonResponse
    {
        $operation->update($request->validated());

        return response()->json([
            'message' => 'Opération mise à jour avec succès.',
            'data' => $operation
        ]);
    }

    public function destroy(Operation $operation): JsonResponse
    {
        $operation->delete();

        return response()->json([
            'message' => 'Opération supprimée avec succès.'
        ], 204);
    }
}
