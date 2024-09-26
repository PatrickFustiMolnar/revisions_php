<?php 

$tab1 = [];

$nb = 0;
$repetition = 5;

while ($nb < $repetition) {
    $tab1[] = rand(1, 99);
    $nb = $nb + 1;
}

echo implode(", ", $tab1);


// Vérifie les doublons





?>