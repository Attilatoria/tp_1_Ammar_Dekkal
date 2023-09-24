<?php
require_once "pants.php";
include "connexion.php";
include "header.php";

$pants = new pants;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    if (empty($id)) {
        echo "Veuillez rentrer le numero du pantalon a supprimer.";
    } else {

        $isDeleted = $pants->deletePantsById($id);

        if (!$isDeleted) {
            echo "Suppression effectuer avec success";
        } else {
            echo "erreur lors de la suppression";
        }
    }
}
$pants->deletePants();
