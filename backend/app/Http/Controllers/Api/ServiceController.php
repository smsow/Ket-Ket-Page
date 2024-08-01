<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\JsonResponse;

class ServiceController extends Controller
{
    public function index(): JsonResponse
    {
        $services = Service::all();
        return response()->json([
            'message' => 'Services récupérés avec succès.',
            'data' => $services,
        ]);
    }

    public function store(StoreServiceRequest $request): JsonResponse
    {
        $service = Service::create($request->validated());
        return response()->json([
            'message' => 'Service créé avec succès.',
            'data' => $service,
        ]);
    }

    public function show(Service $service): JsonResponse
    {
        return response()->json([
            'message' => 'Service récupéré avec succès.',
            'data' => $service,
        ]);
    }

    public function update(UpdateServiceRequest $request, Service $service): JsonResponse
    {
        $service->update($request->validated());
        return response()->json([
            'message' => 'Service mis à jour avec succès.',
            'data' => $service,
        ]);
    }

    public function destroy(Service $service): JsonResponse
    {
        $service->delete();
        return response()->json([
            'message' => 'Service supprimé avec succès.',
        ]);
    }
}
