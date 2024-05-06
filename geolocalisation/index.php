<?php
require 'Geoip.class.php';
$geoip = new Geoip();
$record = $geoip->query('102.244.160.151');
print_r($record);
echo( ' Cettte adresse ip a ete localiser a la longitude '.$record["lg"].' et la lattitude '.$record["lt"].'au pays '.$record["pays"].', la region du '.$record["sud"] .', ville ' . $record["ville"] . ',' . $record["rhost"] .' nombre d erreur ' . $record["erreur"]
 );

?>