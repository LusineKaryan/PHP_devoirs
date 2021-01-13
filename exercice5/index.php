<?php

$array =array("Le","Chat","Botté","de","Charles","Perrault") ;

$longstring = $array[0];
foreach( $array as $string ) {
if ( strlen( $string ) > strlen( $longstring ) ) {
$longstring = $string;
    }
}

echo "Le mot le plus long est\n".$longstring;

echo "<br/>_________________________________________________<br/><br/>";

$shortstring = $array[0];
foreach( $array as $string ) {
if ( strlen( $string ) < strlen( $shortstring ) ) {
$shortstring = $string;
    }
}
echo "Le mot le plus court est\n".$shortstring;
?>

