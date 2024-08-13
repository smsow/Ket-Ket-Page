<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactPartenaireRequest;
use App\Http\Requests\UpdateContactPartenaireRequest;
use App\Models\ContactPartenaire;

class ContactPartenaireController extends Controller
{
    public function index()
    {
        $contacts = ContactPartenaire::all();
        return response()->json(['message' => 'Liste des contacts récupérée avec succès.', 'data' => $contacts], 200);
    }

    public function store(StoreContactPartenaireRequest $request)
    {
        $contact = ContactPartenaire::create($request->validated());
        return response()->json(['message' => 'Contact créé avec succès.', 'data' => $contact], 201);
    }

    public function show($id)
    {
        $contact = ContactPartenaire::findOrFail($id);
        return response()->json(['message' => 'Détails du contact récupérés avec succès.', 'data' => $contact], 200);
    }

    public function update(UpdateContactPartenaireRequest $request, $id)
    {
        $contact = ContactPartenaire::findOrFail($id);
        $contact->update($request->validated());
        return response()->json(['message' => 'Contact mis à jour avec succès.', 'data' => $contact], 200);
    }

    public function destroy($id)
    {
        ContactPartenaire::destroy($id);
        return response()->json(['message' => 'Contact supprimé avec succès.'], 204);
    }
}
