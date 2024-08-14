                    <?php

                    use App\Http\Controllers\Api\ArticleController;
                    use App\Http\Controllers\Api\AccolandController;
                    use App\Http\Controllers\AboutController;
                use App\Http\Controllers\Api\ActivityController;
                use App\Http\Controllers\Api\AdvantageController;
            use App\Http\Controllers\Api\ApiPartenaireController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ContactPartenaireController;
use App\Http\Controllers\Api\DevenerPartenaireController;
use App\Http\Controllers\Api\EntrepriseController;
use App\Http\Controllers\Api\MediaItemController;
        use App\Http\Controllers\Api\NumberController;
    use App\Http\Controllers\Api\OperationController;
use App\Http\Controllers\Api\PartenaireSportController;
use App\Http\Controllers\Api\PartnerForm1Controller;
    use App\Http\Controllers\Api\PartnerForm2Controller;
use App\Http\Controllers\Api\PartnerForm3Controller;
use App\Http\Controllers\Api\PartnerForm4Controller;
use App\Http\Controllers\Api\PrendreRendezVousController;
    use App\Http\Controllers\Api\ServiceController as ApiServiceController;
        use App\Http\Controllers\Api\StaticDecouverteController;
        use App\Http\Controllers\Api\StatisticController;
                use App\Http\Controllers\ServiceController;
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

                //route activite
                //Route::apiResource('activities', ActivityController::class);

                // Route pour afficher la liste des activités
                Route::get('activities', [ActivityController::class, 'index']);
                // Route pour créer une nouvelle activité
                Route::post('activities', [ActivityController::class, 'store']);
                // Route pour afficher une activité spécifique
                Route::get('activities/{id}', [ActivityController::class, 'show']);
                // Route pour mettre à jour une activité spécifique
                Route::put('activities/{id}', [ActivityController::class, 'update']);
                // Route pour supprimer une activité spécifique
                Route::delete('activities/{id}', [ActivityController::class, 'destroy']);

                //route service
                // Route::apiResource('services', ApiServiceController::class);

                // Récupère tous les services
                Route::get('services', [ApiServiceController::class, 'index']);

                // Crée un nouveau service
                Route::post('services', [ApiServiceController::class, 'store']);

                // Récupère un service spécifique
                Route::get('services/{service}', [ApiServiceController::class, 'show']);

                // Met à jour un service existant
                Route::put('services/{service}', [ApiServiceController::class, 'update']);

                // Supprime un service
                Route::delete('services/{service}', [ApiServiceController::class, 'destroy']);

                //route paternaire

            Route::get('partenaires', [ApiPartenaireController::class, 'index']);  // Liste tous les partenaires
            Route::post('partenaires', [ApiPartenaireController::class, 'store']); // Crée un nouveau partenaire
            Route::get('partenaires/{partenaire}', [ApiPartenaireController::class, 'show']); // Affiche un partenaire spécifique
            Route::put('partenaires/{partenaire}', [ApiPartenaireController::class, 'update']); // Met à jour un partenaire spécifique
            Route::delete('partenaires/{partenaire}', [ApiPartenaireController::class, 'destroy']); // Supprime un partenaire spécifique
        // Routes pour StaticDecouverteController
        Route::get('static-decouvertes', [StaticDecouverteController::class, 'index']); // Liste toutes les découvertes statiques
        Route::post('static-decouvertes', [StaticDecouverteController::class, 'store']); // Crée une nouvelle découverte statique
        Route::get('static-decouvertes/{static_decouverte}', [StaticDecouverteController::class, 'show']); // Affiche une découverte statique spécifique
        Route::put('static-decouvertes/{static_decouverte}', [StaticDecouverteController::class, 'update']); // Met à jour une découverte statique spécifique
        Route::delete('static-decouvertes/{static_decouverte}', [StaticDecouverteController::class, 'destroy']); // Supprime une découverte statique spécifique

        // Routes pour NumberController
        Route::get('numbers', [NumberController::class, 'index']); // Liste tous les nombres
        Route::post('numbers', [NumberController::class, 'store']); // Crée un nouveau nombre
        Route::get('numbers/{number}', [NumberController::class, 'show']); // Affiche un nombre spécifique
        Route::put('numbers/{number}', [NumberController::class, 'update']); // Met à jour un nombre spécifique
        Route::delete('numbers/{number}', [NumberController::class, 'destroy']); // Supprime un nombre spécifique

        // route media-items
        // Route::apiResource('media-items', MediaItemController::class);
        // Liste tous les media items
        Route::get('media-items', [MediaItemController::class, 'index']);

        // Crée un nouveau media item
        Route::post('media-items', [MediaItemController::class, 'store']);

        // Affiche un media item spécifique
        Route::get('media-items/{mediaItem}', [MediaItemController::class, 'show']);

        // Met à jour un media item spécifique
        Route::put('media-items/{mediaItem}', [MediaItemController::class, 'update']);

        // Supprime un media item spécifique
        Route::delete('media-items/{mediaItem}', [MediaItemController::class, 'destroy']);

    // Routes pour DevenerPartenaire
    // GET /devener-partenaires - Récupère la liste de tous les partenaires
    Route::get('devener-partenaires', [DevenerPartenaireController::class, 'index']);

    // POST /devener-partenaires - Crée un nouveau partenaire
    Route::post('devener-partenaires', [DevenerPartenaireController::class, 'store']);

    // GET /devener-partenaires/{id} - Récupère les détails d'un partenaire spécifique
    Route::get('devener-partenaires/{id}', [DevenerPartenaireController::class, 'show']);

    // PUT/PATCH /devener-partenaires/{id} - Met à jour un partenaire existant
    Route::put('devener-partenaires/{id}', [DevenerPartenaireController::class, 'update']);

    // DELETE /devener-partenaires/{id} - Supprime un partenaire spécifique
    Route::delete('devener-partenaires/{id}', [DevenerPartenaireController::class, 'destroy']);
    // Routes pour PrendreRendezVous
    // GET /prendre-rendez-vous - Récupère la liste de tous les rendez-vous
    Route::get('prendre-rendez-vous', [PrendreRendezVousController::class, 'index']);
    // POST /prendre-rendez-vous - Crée un nouveau rendez-vous
    Route::post('prendre-rendez-vous', [PrendreRendezVousController::class, 'store']);
    // GET /prendre-rendez-vous/{id} - Récupère les détails d'un rendez-vous spécifique
    Route::get('prendre-rendez-vous/{id}', [PrendreRendezVousController::class, 'show']);
    // PUT/PATCH /prendre-rendez-vous/{id} - Met à jour un rendez-vous existant
    Route::put('prendre-rendez-vous/{id}', [PrendreRendezVousController::class, 'update']);
    // DELETE /prendre-rendez-vous/{id} - Supprime un rendez-vous spécifique
    Route::delete('prendre-rendez-vous/{id}', [PrendreRendezVousController::class, 'destroy']);

    // Routes pour Operation
    // GET /operations - Récupère la liste de toutes les opérations
    Route::get('operations', [OperationController::class, 'index']);

    // POST /operations - Crée une nouvelle opération
    Route::post('operations', [OperationController::class, 'store']);

    // GET /operations/{id} - Récupère les détails d'une opération spécifique
    Route::get('operations/{id}', [OperationController::class, 'show']);

    // PUT/PATCH /operations/{id} - Met à jour une opération existante
    Route::put('operations/{id}', [OperationController::class, 'update']);

    // DELETE /operations/{id} - Supprime une opération spécifique
    Route::delete('operations/{id}', [OperationController::class, 'destroy']);


                    //route partenaire Form1
                    // Liste tous les enregistrements de PartnerForm1
                    Route::get('partners-form1', [PartnerForm1Controller::class, 'index']);

                    // Crée un nouvel enregistrement PartnerForm1
                    Route::post('partners-form1', [PartnerForm1Controller::class, 'store']);

                    // Récupère un enregistrement spécifique de PartnerForm1 par son ID
                    Route::get('partners-form1/{id}', [PartnerForm1Controller::class, 'show']);

                    // Met à jour un enregistrement existant de PartnerForm1
                    Route::put('partners-form1/{id}', [PartnerForm1Controller::class, 'update']);

                    // Supprime un enregistrement spécifique de PartnerForm1 par son ID
                    Route::delete('partners-form1/{id}', [PartnerForm1Controller::class, 'destroy']);


                //route PaternerForm2

                // Routes pour les partenaires Form2
                Route::get('partners-form2', [PartnerForm2Controller::class, 'index']);
                Route::post('partners-form2', [PartnerForm2Controller::class, 'store']);
                Route::get('partners-form2/{partner_form2}', [PartnerForm2Controller::class, 'show']);
                Route::put('partners-form2/{partner_form2}', [PartnerForm2Controller::class, 'update']);
                Route::delete('partners-form2/{partner_form2}', [PartnerForm2Controller::class, 'destroy']);

//route form3

// Liste tous les enregistrements de PartnerForm3
Route::get('partners-form3', [PartnerForm3Controller::class, 'index']);

// Crée un nouvel enregistrement PartnerForm3
Route::post('partners-form3', [PartnerForm3Controller::class, 'store']);

// Récupère un enregistrement spécifique de PartnerForm3 par son ID
Route::get('partners-form3/{id}', [PartnerForm3Controller::class, 'show']);

// Met à jour un enregistrement existant de PartnerForm3
Route::put('partners-form3/{id}', [PartnerForm3Controller::class, 'update']);

// Supprime un enregistrement spécifique de PartnerForm3 par son ID
Route::delete('partners-form3/{id}', [PartnerForm3Controller::class, 'destroy']);

//route PartnerForm4
Route::get('partners-form4', [PartnerForm4Controller::class, 'index']);
// - Méthode: GET
// - Description: Renvoie la liste de tous les enregistrements de PartnerForm4.

Route::post('partners-form4', [PartnerForm4Controller::class, 'store']);
// - Méthode: POST
// - Description: Crée un nouvel enregistrement de PartnerForm4.

Route::get('partners-form4/{id}', [PartnerForm4Controller::class, 'show']);
// - Méthode: GET
// - Description: Renvoie les détails d'un enregistrement spécifique de PartnerForm4.

Route::put('partners-form4/{id}', [PartnerForm4Controller::class, 'update']);
// - Méthode: PUT
// - Description: Met à jour un enregistrement spécifique de PartnerForm4.

Route::delete('partners-form4/{id}', [PartnerForm4Controller::class, 'destroy']);
                    // - Méthode: DELETE
                    // - Description: Supprime un enregistrement spécifique de PartnerForm4.

                    //route
                    Route::get('/partenaire-sports', [PartenaireSportController::class, 'index']);
                    Route::post('/partenaire-sports', [PartenaireSportController::class, 'store']);
                    Route::get('/partenaire-sports/{id}', [PartenaireSportController::class, 'show']);
                    Route::put('/partenaire-sports/{id}', [PartenaireSportController::class, 'update']);
                    Route::delete('/partenaire-sports/{id}', [PartenaireSportController::class, 'destroy']);

                    //  Route::apiResource('partenaire-sports', PartenaireSportController::class);
                    //Route::apiResource('contact-partenaires', ContactPartenaireController::class);
                    // Affiche une liste de tous les contacts partenaires
                    Route::get('contact-partenaires', [ContactPartenaireController::class, 'index']);

                    // Crée un nouveau contact partenaire (affiche le formulaire de création, souvent utilisé en POST)
                    Route::post('contact-partenaires', [ContactPartenaireController::class, 'store']);

                    // Affiche les détails d'un contact partenaire spécifique
                    Route::get('contact-partenaires/{contactPartenaire}', [ContactPartenaireController::class, 'show']);

                    // Met à jour les informations d'un contact partenaire spécifique
                    Route::put('contact-partenaires/{contactPartenaire}', [ContactPartenaireController::class, 'update']);

                    // Supprime un contact partenaire spécifique
                    Route::delete('contact-partenaires/{contactPartenaire}', [ContactPartenaireController::class, 'destroy']);
                    // Route::apiResource('entreprises', EntrepriseController::class);
                        Route::get('/entreprises', [EntrepriseController::class, 'index']);
                        Route::post('/entreprises', [EntrepriseController::class, 'store']);
                        Route::get('/entreprises/{id}', [EntrepriseController::class, 'show']);
                        Route::put('/entreprises/{id}', [EntrepriseController::class, 'update']);
                        Route::delete('/entreprises/{id}', [EntrepriseController::class, 'destroy']);
                        //route clients
                        //Route::apiResource('clients', ClientController::class);
                        // Route pour obtenir la liste de tous les clients
                        Route::get('clients', [ClientController::class, 'index']); // GET /api/clients

                        // Route pour obtenir les détails d'un client spécifique par ID
                        Route::get('clients/{client}', [ClientController::class, 'show']); // GET /api/clients/{id}

                        // Route pour créer un nouveau client
                        Route::post('clients', [ClientController::class, 'store']); // POST /api/clients

                        // Route pour mettre à jour un client existant par ID
                        Route::put('clients/{client}', [ClientController::class, 'update']); // PUT /api/clients/{id}

                        // Route pour supprimer un client par ID
                        Route::delete('clients/{client}', [ClientController::class, 'destroy']); // DELETE /api/clients/{id}
