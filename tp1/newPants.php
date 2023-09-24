<?php
require_once "pants.php";
include "connexion.php";
include "header.php";

$pants = new pants;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nameP'];
    $marque = $_POST['brandP'];
    $stock = $_POST['stockP'];


    $pantsData = [
        'name' => $name,
        'marque' => $marque,
        'stock' => $stock,
    ];

    // Appel de la fonction addNewPants pour insérer les données dans la base de données
    $insertedId = $pants->addNewPants($pantsData);

    if ($insertedId !== false) {
        echo "Le pantalon a été ajouté avec succès avec l'ID : " . $insertedId;
    } else {
        echo "Une erreur s'est produite lors de l'ajout du pantalon.";
    }
}
$pants->NewPants();
