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

$petit = $tab1[0];

foreach ($tab1 as $nombre) { 
    if($nombre < $petit){
        $petit = $nombre;
    }

}
echo "<br>";
echo "Le plus petit nombre est : " . $petit;



// Plus grand

$grand = $tab1[0];

foreach ($tab1 as $grand) {
    if($nombre > $grand){
        $grand = $nombre;
    }
}
echo "<br>";
echo "Le plus grand nombre est : " . $grand;




?>