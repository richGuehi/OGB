<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

// Ta page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// La route DYNAMIQUE pour tous les projets
Route::get('/projet/{slug}', function ($slug) {

    // Notre "fausse" base de données pour l'instant
    $projets = [
        'maison-individuelle' => [
            'title' => 'Villa Familiale Moderne',
            'category' => 'Construction',
            'year' => '2024',
            'location' => 'Yamoussoukro, Côte d\'Ivoire',
            'client' => 'Client Particulier',
            'duration' => '10 mois',
            'status' => 'Livré avec succès',
            'status_color' => 'text-green-600',
            // Image d'une belle maison moderne et simple
            'hero_image' => 'maison_indiv01/img_04.jpg',
            'description_short' => "Construction clé en main d'une maison d'habitation de 4 pièces, pensée pour le confort familial avec des finitions soignées et durables.",
            'challenge' => "Respecter un budget défini et un délai d'exécution strict de 10 mois avant le début de la saison des pluies, tout en garantissant des fondations parfaitement stables sur un terrain légèrement en pente.",
            'solution' => "Optimisation des plans pour réduire les pertes de matériaux, réalisation de fondations adaptées au nivellement, et coordination rigoureuse des équipes de gros œuvre et de second œuvre.",
            'features' => [
                "Aménagement de 3 chambres autonomes avec salles de bain intégrées.",
                "Grand salon lumineux avec baies vitrées pour maximiser l'éclairage naturel.",
                "Isolation thermique spécifique de la toiture pour réduire la chaleur à l'intérieur.",
                "Installation électrique complète et sécurisée (Synergie avec le Pôle Électrique)."
            ],
            // Structure prête pour quand tu auras les photos de la maison
            'gallery' => [
                ['type' => 'image', 'url' => 'maison_indiv01/img_01.jpeg'],
                ['type' => 'image', 'url' => 'maison_indiv01/img_02.jpeg'],
                ['type' => 'image', 'url' => 'maison_indiv01/img_03.jpeg'],
                ['type' => 'image', 'url' => 'maison_indiv01/img_04.jpg'],
                ['type' => 'image', 'url' => 'maison_indiv01/img_5.png'],
                ['type' => 'video', 'url' => 'maison_indiv01/deo_maison_01.mp4'],
            ]
        ],
        'laverie-moderne' => [
            'title' => 'Complexe laverie All Blue',
            'category' => 'Construction & Électricité',
            'year' => '2025',
            'location' => 'Angré, Abidjan',
            'client' => ' Monsieur Al Hassane',
            'duration' => '5 mois',
            'status' => 'Livré avec succès',
            'status_color' => 'text-green-600',
            // Une image de tuyauterie/laverie pour l'exemple
            'hero_image' => 'https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=2070&auto=format&fit=crop',
            'description_short' => "Rénovation complète de deux magasins avec mezzanine pour la création d'un espace pressing au rez-de-chaussée et de bureaux administratifs à l'étage.",
            'challenge' => "Optimiser un espace restreint pour intégrer les équipements techniques du pressing (plomberie, extraction d'air) tout en garantissant le confort thermique et acoustique des bureaux sur la mezzanine.",
            'solution' => "Réaménagement intelligent des volumes, renforcement de la structure de la mezzanine et création d'une séparation technique claire entre la zone d'activité humide et l'espace de travail.",
            'features' => [
                "Mise aux normes sur mesure de la plomberie et de l'électricité pour les machines professionnelles.",
                "Renforcement structurel de la mezzanine pour l'aménagement sécurisé des bureaux.",
                "Installation d'un système d'extraction d'air et d'isolation acoustique renforcée."
            ],
            'gallery' => [
                ['type' => 'image', 'url' => 'laverie/img_02.jpeg'],
                ['type' => 'image', 'url' => 'laverie/img_03.jpeg'],
                ['type' => 'video', 'url' => 'laverie/deo_laverie01.mp4'],
                ['type' => 'image', 'url' => 'laverie/img_04.jpeg'],
                ['type' => 'video', 'url' => 'laverie/deo_laverie02.mp4'],
                ['type' => 'image', 'url' => 'laverie/img_05.jpeg'],
            ]
        ]
    ];

    // Si le projet demandé dans l'URL n'existe pas dans notre liste, on affiche une erreur 404
    if (!array_key_exists($slug, $projets)) {
        abort(404);
    }

    // On envoie les données du bon projet à notre vue
    return view('project-details', [
        'project' => $projets[$slug]
    ]);

});


Route::post('/envoyer-message', function (Request $request) {
    // 1. On vérifie que les champs sont bien remplis
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // 2. On envoie l'e-mail à l'adresse de l'entreprise
    // Remplace par la vraie adresse mail de OGB
    // Mail::to('info@ouatge.com')->send(new ContactMessage($validated));
    Mail::to('richmondb.guehi@gmail.com')->send(new ContactMessage($validated));

    // 3. On redirige l'utilisateur vers la page précédente avec un message de succès
    return back()->with('success', 'Merci ! Votre message a bien été envoyé, notre équipe vous répondra très vite.');
});