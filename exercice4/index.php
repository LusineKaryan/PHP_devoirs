<?php

$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
// $prenoms [5] = "Leeloo;"
// array_push($prenoms,"Leeloo");
$insert = array('Leeloo');

array_splice($prenoms,0,0,$insert);
unset($prenoms[3]);
unset($prenoms[4]);
unset($prenoms[5]);

echo "<ul>";
foreach ($prenoms as $key => $value) {
    echo "<li>$key " . $value . "</li>";
}
echo "</ul>";


// echo "The array is: <br/>";
// print_r($prenoms);

?>