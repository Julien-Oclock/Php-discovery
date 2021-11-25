<?php


$openingShop = [
    'morning' => [],
    'afternoon' => []
];

$opening = (int)readline('Entrez l\'horraire d\'ouverture du magasin : ');
$closure = (int)readline('Entrez l\'horraire de fermeture du magasin : ');

if ($opening < $closure) {
    $openingShop['morning'][] = $opening;
    $openingShop['morning'][] = $closure;
} else {
    echo 'L\'heure d\'ouverture doit être inférieur à l\'heure de fermeture';
}

$otherOptions = readline('voulez-vous rajouter des crénaux d\'ouverture ? (o/n) : ');

if($otherOptions === 'o'){
    $opening = (int)readline('Entrez l\'horraire d\'ouverture du magasin : ');
    $closure = (int)readline('Entrez l\'horraire de fermeture du magasin : ');
    if ($opening < $closure) {
        $openingShop['afternoon'][] = $opening;
        $openingShop['afternoon'][] = $closure;
    } else {
        echo 'L\'heure d\'ouverture doit être inférieur à l\'heure de fermeture';
    }

}

$client = (int)readline('Entrez votre horraire d\'arriver au magasin : ');

if (
    ($client > $openingShop['morning'][0] && $client < $openingShop['morning'][1] )
    || 
    ($client > $openingShop['afternoon'][0] && $client < $openingShop['afternoon'][1])
    ) {
    echo 'Bienvenu le magasin est ouvert';
} else {
    echo 'Désoler notre établissement est fermé';
}

