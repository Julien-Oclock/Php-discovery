<?php


/*
******** LES VARIABLES **********
$name = 'Bibi';
$lastName = 'Hibou';
$grade1 = 18;
$grade2 = 12;
$sum = ($grade1 + $grade2) / 2;

echo "Bonjour $name $lastname vous avez eu $sum de moyenne";



******** Les Tableaux **********

$notes = [$grade1, $grade2, 14, 13, 17, 2, 7];
$eleve = [
    'nom' => $lastName,
    'prenom'=> $name, 
    'notes' => [10, 12, 15, 18]
];
$eleve['notes'][] = 16; 

echo $eleve['nom'] . ' ' .  $eleve['prenom'];
print_r($eleve['notes']);


******** Les Conditions **********


**** IF / ELSE / ELSEIF **********

$note = (int)readline('Entrez votre note : ');
if( $note > 10){
    echo 'Bravo vous avez la moyenne';    
} elseif ($note === 10 ){
    echo 'Bravo vous avez juste la moyenne';
} else{
    echo 'Dommage vous n\'avez pas la moyenne';
};


*************** SWITCH CASE **********************
$action = (int)readline('entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour) : ');
switch ($action){
   
    case 1 :  
        echo 'J\'attaque';
        break;
    case 2 :
        echo 'Je défend';
        break;
    case 3 : 
        'Je passe mon tour';
        break;
    default : 
        echo 'Commande inconnue';
}


********* les Operateurs **************

$heure = (int)readline('Entrez votre heure d\'arriver au magasin : ');
if( ($heure >= 9 && $heure <= 12) || ($heure >= 14 && $heure <= 17) ){
    echo 'Le magasin sera ouvert';
} else {
    echo 'Desoler le magasin sera fermé';
}



*************** WHILE *****************
$chiffre = null;

while ($chiffre !==10) {
    $chiffre = (int)readline('entrez une chiffre : ');
}

echo 'bravo vous avez gagné !';*/

$pet = [
    'chiens' => ['Cid', 'Amalie'],
    'chats' => ['Bibou', 'Stix']
];

foreach ($pet as $race => $names){
    echo "La liste de mes $race :\n";
    foreach($names as $name){
        echo "- $name \n";
    }
    echo "  \n";
}