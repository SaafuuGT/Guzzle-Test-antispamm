<?php

// Chargement de l'autoloader de Composer
require 'vendor/autoload.php';

// Création d'un client Guzzle
$client = new GuzzleHttp\Client();

// Envoi de la requête à l'API de l'antispam
$response = $client->request('POST', 'http://takingcare.fr/#nous-contacter', [
    'form_params' => [
        '_wpcf7_posted_data_hash' => 'qjdzioq',
        'your-name' => 'Test nom',
        'email' => 'votre@email.com',
        'tel-691' => '0612345678',
        'your-message' => 'Test'

    ]
]);



// Récupération du code de réponse HTTP
$code = $response->getStatusCode();

// Affiche le code de réponse et le corps de la réponse
echo "Code de réponse : $code\n";