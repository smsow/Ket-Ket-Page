<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Affiche une liste de tous les clients.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $clients = Client::all();
        return response()->json([
            'message' => 'Liste des clients récupérée avec succès.',
            'data' => $clients
        ]);
    }

    /**
     * Affiche les détails d'un client spécifique.
     *
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Client $client)
    {
        return response()->json([
            'message' => 'Détails du client récupérés avec succès.',
            'data' => $client
        ]);
    }

    /**
     * Crée un nouveau client dans la base de données.
     *
     * @param \App\Http\Requests\StoreClientRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreClientRequest $request)
    {
        // Les données validées sont automatiquement disponibles dans la requête
        $client = Client::create($request->validated());

        return response()->json([
            'message' => 'Client créé avec succès.',
            'data' => $client
        ], 201); // Code de réponse HTTP 201 pour une ressource créée
    }

    /**
     * Met à jour les informations d'un client existant.
     *
     * @param \App\Http\Requests\UpdateClientRequest $request
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->validated());

        return response()->json([
            'message' => 'Client mis à jour avec succès.',
            'data' => $client
        ]);
    }

    /**
     * Supprime un client de la base de données.
     *
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return response()->json([
            'message' => 'Client supprimé avec succès.'
        ], 204); // Code de réponse HTTP 204 pour une suppression réussie sans contenu
    }
}
