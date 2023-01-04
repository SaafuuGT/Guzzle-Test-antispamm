<?php

// Chargement de l'autoloader de Composer
require 'vendor/autoload.php';

// Création d'un client Guzzle
$client = new GuzzleHttp\Client();

// Tableaux de valeurs à utiliser pour remplir les champs du formulaire
$emails = [
    'email1@example.com',
    'email2@example.com',
    'email3@example.com',
    'email4@example.com'
];
$subjects = [
    'Sujet 1',
    'Sujet 2',
    'Sujet 3',
    'Sujet 4'
];
$messages = [
    'Contenu du message 1',
    'Contenu du message 2',
    'Contenu du message 3',
    'Contenu du message 4'
];

// Boucle sur toutes les valeurs
foreach ($emails as $i => $email) {
    // Envoi de la requête à l'API de l'antispam
    $response = $client->request('POST', 'https://mangaworld.alwaysdata.net/contact.php', [
        'form_params' => [
            'name' => 'MON NOM',
            'email' => $emails[$i],
            'subject' => $subjects[$i],
            'message' => $messages[$i]
        ]
    ]);

    // Récupération du code de réponse HTTP
    $code = $response->getStatusCode();


    // Affiche le code de réponse et le corps de la réponse
    echo "Code de réponse pour $email : $code\n";
}
?>