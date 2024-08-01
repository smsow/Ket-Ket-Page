<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMediaItemRequest;
use App\Http\Requests\UpdateMediaItemRequest;
use App\Models\MediaItem;

class MediaItemController extends Controller
{
    public function index()
    {
        $mediaItems = MediaItem::all();
        return response()->json([
            'message' => 'Liste des media items récupérée avec succès.',
            'data' => $mediaItems
        ]);
    }

    public function store(StoreMediaItemRequest $request)
    {
        $mediaItem = MediaItem::create($request->validated());

        return response()->json([
            'message' => 'Media item créé avec succès.',
            'data' => $mediaItem
        ], 201);
    }

    public function show(MediaItem $mediaItem)
    {
        return response()->json([
            'message' => 'Media item récupéré avec succès.',
            'data' => $mediaItem
        ]);
    }

    public function update(UpdateMediaItemRequest $request, MediaItem $mediaItem)
    {
        $mediaItem->update($request->validated());

        return response()->json([
            'message' => 'Media item mis à jour avec succès.',
            'data' => $mediaItem
        ]);
    }

    public function destroy(MediaItem $mediaItem)
    {
        $mediaItem->delete();

        return response()->json([
            'message' => 'Media item supprimé avec succès.'
        ]);
    }
}
