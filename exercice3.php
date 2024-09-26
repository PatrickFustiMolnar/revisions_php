<?php

$tab1 = [];

$nb = 0;
$repetition = 5;

while ($nb < $repetition) {
    $tab1[] = rand(1, 99);
    $nb = $nb + 1;
}

echo implode(", ", $tab1);


// Plus petit

function plusPetit($tab1){
    $petit = min($tab1);
    return $petit;
}

$petit = plusPetit($tab1);

echo "<br>";
echo "Le plus petit nombre est : " . $petit;




// Plus grand


function plusGrand($tab1){
    $grand = max($tab1);
    return $grand;
}

$grand = plusGrand($tab1);

echo "<br>";
echo "Le plus grand nombre est : " . $grand;




?>