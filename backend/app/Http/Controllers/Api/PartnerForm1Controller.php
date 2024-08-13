<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnerForm1Request;
use App\Http\Requests\UpdatePartnerForm1Request;
use App\Models\PartnerForm1;
use Illuminate\Http\Request;

class PartnerForm1Controller extends Controller
{
    public function index()
    {
        $partners = PartnerForm1::all();
        return response()->json([
            'message' => 'Liste des partenaires récupérée avec succès.',
            'data' => $partners
        ]);
    }

    public function store(StorePartnerForm1Request $request)
    {
        $partner = PartnerForm1::create($request->validated());
        return response()->json([
            'message' => 'Partenaire créé avec succès.',
            'data' => $partner
        ], 201);
    }

    public function show($id)
    {
        $partner = PartnerForm1::findOrFail($id);
        return response()->json([
            'message' => 'Partenaire récupéré avec succès.',
            'data' => $partner
        ]);
    }

    public function update(UpdatePartnerForm1Request $request, $id)
    {
        $partner = PartnerForm1::findOrFail($id);
        $partner->update($request->validated());
        return response()->json([
            'message' => 'Partenaire mis à jour avec succès.',
            'data' => $partner
        ], 200);
    }

    public function destroy($id)
    {
        $partner = PartnerForm1::findOrFail($id);
        $partner->delete();
        return response()->json([
            'message' => 'Partenaire supprimé avec succès.'
        ], 204);
    }
}
