    <?php

    use App\Http\Controllers\Api\ArticleController;
    use App\Http\Controllers\Api\AccolandController;
    use App\Http\Controllers\AboutController;
    use App\Http\Controllers\Api\AdvantageController;
    use App\Http\Controllers\Api\StatisticController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;


    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "api" middleware group. Make something great!
    |
    */
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });


    //Route::apiResource('articles', ArticleController::class);


    // Récupérer tous les articles
    Route::get('articles', [ArticleController::class, 'index']);

    // Créer un nouvel article
    Route::post('articles', [ArticleController::class, 'store']);

    // Récupérer un article par ID
    Route::get('articles/{article}', [ArticleController::class, 'show']);

    // Mettre à jour un article par ID
    Route::put('articles/{article}', [ArticleController::class, 'update']);

    // Supprimer un article par ID
    Route::delete('articles/{article}', [ArticleController::class, 'destroy']);

    //route accoland
    //Route::apiResource('accolands', AccolandController::class);

    // Récupérer tous les Accolands
    Route::get('/accolands', [AccolandController::class, 'index']);

    // Créer un nouvel Accoland
    Route::post('/accolands', [AccolandController::class, 'store']);

    // Récupérer un Accoland spécifique par ID
    Route::get('/accolands/{accoland}', [AccolandController::class, 'show']);

    // Mettre à jour un Accoland spécifique par ID
    Route::put('/accolands/{accoland}', [AccolandController::class, 'update']);

    // Supprimer un Accoland spécifique par ID
    Route::delete('/accolands/{accoland}', [AccolandController::class, 'destroy']);


    // route about
    // Route::apiResource('abouts', AboutController::class);
    // Route pour obtenir la liste de toutes les ressources "About"
    // GET /api/abouts
    Route::get('abouts', [AboutController::class, 'index']);

    // Route pour obtenir une seule ressource "About" par son ID
    // GET /api/abouts/{id}
    Route::get('abouts/{id}', [AboutController::class, 'show']);

    // Route pour créer une nouvelle ressource "About"
    // POST /api/abouts
    Route::post('abouts', [AboutController::class, 'store']);

    // Route pour mettre à jour une ressource "About" existante
    // PUT /api/abouts/{id}
    Route::put('abouts/{id}', [AboutController::class, 'update']);

    // Route pour supprimer une ressource "About" par son ID
    // DELETE /api/abouts/{id}
    Route::delete('abouts/{id}', [AboutController::class, 'destroy']);
//advantage

// Récupérer tous les avantages
Route::get('advantages', [AdvantageController::class, 'index']);

// Créer un nouvel avantage
Route::post('advantages', [AdvantageController::class, 'store']);

// Récupérer un avantage par ID
Route::get('advantages/{id}', [AdvantageController::class, 'show']);

// Mettre à jour un avantage par ID
Route::put('advantages/{id}', [AdvantageController::class, 'update']);

// Supprimer un avantage par ID
Route::delete('advantages/{id}', [AdvantageController::class, 'destroy']);

//route static

Route::prefix('statistics')->group(function () {
    Route::get('/', [StatisticController::class, 'index']); // Récupérer toutes les statistiques
    Route::post('/', [StatisticController::class, 'store']); // Créer une nouvelle statistique
    Route::get('/{id}', [StatisticController::class, 'show']); // Récupérer une statistique par ID
    Route::put('/{id}', [StatisticController::class, 'update']); // Mettre à jour une statistique par ID
    Route::delete('/{id}', [StatisticController::class, 'destroy']); // Supprimer une statistique par ID
});
