<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdresseRequest;
use App\Http\Requests\UpdateAdresseRequest;
use App\Models\Adresse;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AdresseController extends Controller
{
    /**
     * Affiche une liste de toutes les adresses.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // Récupère toutes les adresses dans la base de données
        $adresses = Adresse::all();

        // Retourne la liste des adresses avec un message de succès
        return response()->json([
            'message' => 'Adresses récupérées avec succès.',
            'data' => $adresses
        ], 200); // 200 OK
    }

    /**
     * Crée une nouvelle adresse.
     *
     * @param StoreAdresseRequest $request
     * @return JsonResponse
     */
    public function store(StoreAdresseRequest $request): JsonResponse
    {
        // Validation des données avec les règles définies dans StoreAdresseRequest
        $validatedData = $request->validated();

        // Création de la nouvelle adresse avec les données validées
        $adresse = Adresse::create($validatedData);

        // Retourne la nouvelle adresse avec un message de succès
        return response()->json([
            'message' => 'Adresse créée avec succès.',
            'data' => $adresse
        ], 201); // 201 Created
    }

    /**
     * Affiche les détails d'une adresse spécifique.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        try {
            // Recherche de l'adresse par ID, avec gestion des erreurs si l'adresse n'est pas trouvée
            $adresse = Adresse::findOrFail($id);

            // Retourne les détails de l'adresse avec un message de succès
            return response()->json([
                'message' => 'Adresse récupérée avec succès.',
                'data' => $adresse
            ], 200); // 200 OK
        } catch (ModelNotFoundException $e) {
            // Retourne une réponse d'erreur si l'adresse n'est pas trouvée
            return response()->json([
                'message' => 'Adresse non trouvée.'
            ], 404); // 404 Not Found
        }
    }

    /**
     * Met à jour une adresse existante.
     *
     * @param UpdateAdresseRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateAdresseRequest $request, int $id): JsonResponse
    {
        try {
            // Recherche de l'adresse par ID, avec gestion des erreurs si l'adresse n'est pas trouvée
            $adresse = Adresse::findOrFail($id);

            // Validation des données avec les règles définies dans UpdateAdresseRequest
            $validatedData = $request->validated();

            // Mise à jour de l'adresse existante avec les données validées
            $adresse->update($validatedData);

            // Retourne l'adresse mise à jour avec un message de succès
            return response()->json([
                'message' => 'Adresse mise à jour avec succès.',
                'data' => $adresse
            ], 200); // 200 OK
        } catch (ModelNotFoundException $e) {
            // Retourne une réponse d'erreur si l'adresse n'est pas trouvée
            return response()->json([
                'message' => 'Adresse non trouvée.'
            ], 404); // 404 Not Found
        }
    }

    /**
     * Supprime une adresse existante.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            // Recherche de l'adresse par ID, avec gestion des erreurs si l'adresse n'est pas trouvée
            $adresse = Adresse::findOrFail($id);

            // Suppression de l'adresse spécifiée
            $adresse->delete();

            // Retourne une réponse vide avec un message de succès après la suppression
            return response()->json([
                'message' => 'Adresse supprimée avec succès.'
            ], 204); // 204 No Content
        } catch (ModelNotFoundException $e) {
            // Retourne une réponse d'erreur si l'adresse n'est pas trouvée
            return response()->json([
                'message' => 'Adresse non trouvée.'
            ], 404); // 404 Not Found
        }
    }
}
