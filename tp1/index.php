<?php
include "connexion.php";

require_once "pants.php";
require_once "pantalon.php";

include "header.php";
echo "<br><hr>";

$pants = new pants;

$allpants = $pants->SeeAllPants();

echo "<br><hr>";

$pantsById = $pants->getPantsById(2);
echo '<br><br>';
echo 'Les Info du pantalon :' . " #" . $pantsById['id_pants'];
echo '<br>';
echo "Nom: " . $pantsById['name'] . "<br>Marque: " . $pantsById['marque'] . "<br>En stock: " . $pantsById['stock'];

echo "<br>";

$pantsByBrand = $pants->getPantsOrderdedWithSameBrand("Lacoste");

echo "<br><hr>";
echo "<br><br>";

$listPantalonByBrand = [];
foreach ($pantsByBrand as $panta) {
    $listPantalonByBrand[] = $panta['name'];
}
echo "La marque  " . $panta['marque'] . ", contient les " . implode(', ', $listPantalonByBrand);
// j'ai trouver le implode a l'aide d'internet car impossible de convertir directement un aray en string autrement.
echo "<br><hr>";
