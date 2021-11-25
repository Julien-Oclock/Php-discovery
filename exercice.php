<?php



$notes = [];

while (true) {
    $action = (int)readline('Entrez vos notes ou tapez le mot \'Fin\' si vous avez terminer : ');
    if ($action == 'fin'){
        break;
    } else {
        $notes[] = (int)$action;
    } 
       
}

$NumberOfGrade = count($notes); 
echo "Voici la liste de vos notes : \n";
foreach($notes as $note){
    echo "- $note \n";
    $sum += $note;
}

$average = $sum / $NumberOfGrade;

echo "Votre moyenne est de : $average";

$opening = (int)readline('Entrez l\'horraire d\'ouverture du magasin : ');
$closure = (int)readline('Entrez l\'horraire de fermeture du magasin : ');

$client = (int)readline('Entrez votre horraire d\'arriver au magasin : ');

if($client > $opening || $client < $closure){
    echo 'Bienvenu le magasin est ouvert';
} else {
    echo 'Désoler notre établissement est fermé';
}