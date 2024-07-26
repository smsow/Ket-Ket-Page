<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ArticleController extends Controller
{
    // 1. Récupérer tous les articles
    public function index()
    {
        $articles = Article::all();
        return response()->json([
            'message' => 'Articles retrieved successfully.',
            'data' => $articles
        ], 200); // 200 OK
    }

    // 2. Créer un nouvel article
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'required|string',
        ]);

        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $request->image, // Assurez-vous de gérer correctement le chemin d'image
        ]);

        return response()->json([
            'message' => 'Article created successfully.',
            'data' => $article
        ], 201); // 201 Created
    }

    // 3. Récupérer un article par ID
    public function show($id)
    {
        try {
            $article = Article::findOrFail($id);
            return response()->json([
                'message' => 'Article retrieved successfully.',
                'data' => $article
            ], 200); // 200 OK
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Article not found.'
            ], 404); // 404 Not Found
        }
    }

    // 4. Mettre à jour un article par ID
    public function update(Request $request, $id)
    {
        try {
            $article = Article::findOrFail($id);

            $request->validate([
                'title' => 'sometimes|string|max:255',
                'subtitle' => 'sometimes|string|max:255',
                'image' => 'sometimes|string',
            ]);

            $data = $request->only(['title', 'subtitle']);

            if ($request->has('image')) {
                $data['image'] = $request->image;
            }

            $article->update($data);

            return response()->json([
                'message' => 'Article updated successfully.',
                'data' => $article
            ], 200); // 200 OK
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Article not found.'
            ], 404); // 404 Not Found
        }
    }

    // 5. Supprimer un article par ID
    public function destroy($id)
    {
        try {
            $article = Article::findOrFail($id);
            $article->delete();

            return response()->json([
                'message' => 'Article deleted successfully.'
            ], 204); // 204 No Content
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Article not found.'
            ], 404); // 404 Not Found
        }
    }
}
