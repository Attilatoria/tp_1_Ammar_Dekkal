<?php
require_once "pants.php";
include "connexion.php";
include "header.php";

$pants = new pants;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['nameP'];
    $marque = $_POST['brandP'];
    $stock = $_POST['stockP'];


    $updatedPantsData = [
        'name' => $name,
        'marque' => $marque,
        'stock' => $stock,
    ];


    $isUpdated = $pants->updatePantsById($id, $updatedPantsData);

    if (!$isUpdated) {
        echo "Le pantalon a été mis à jour avec succès.";
    } else {
        echo "Une erreur s'est produite lors de la mise à jour du pantalon.";
    }
}
$pants->updatedPants();
