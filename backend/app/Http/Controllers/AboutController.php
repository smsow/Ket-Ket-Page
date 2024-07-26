<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
use Illuminate\Http\JsonResponse;

class AboutController extends Controller
{
    /**
     * Afficher tous les enregistrements.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $abouts = About::all();
        return response()->json($abouts);
    }

    /**
     * Créer un nouvel enregistrement.
     *
     * @param StoreAboutRequest $request
     * @return JsonResponse
     */
    public function store(StoreAboutRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        $about = About::create($validatedData);

        return response()->json($about, 201);
    }

    /**
     * Afficher un enregistrement spécifique.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $about = About::findOrFail($id);
        return response()->json($about);
    }

    /**
     * Mettre à jour un enregistrement spécifique.
     *
     * @param UpdateAboutRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateAboutRequest $request, int $id): JsonResponse
    {
        $validatedData = $request->validated();

        $about = About::findOrFail($id);
        $about->update($validatedData);

        return response()->json($about);
    }

    /**
     * Supprimer un enregistrement spécifique.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $about = About::findOrFail($id);
        $about->delete();

        return response()->json(null, 204);
    }
}
