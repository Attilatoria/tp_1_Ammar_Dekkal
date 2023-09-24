<?php

abstract class pantalon
{


    public function getAllPants() // fonction qui retourne une liste de tout les pantalons
    {
        global $oPDO;
        $oPDOStmt = $oPDO->query("SELECT * FROM pantalon");
        $pantalon = $oPDOStmt->fetchAll(PDO::FETCH_ASSOC);
        return $pantalon;
    }

    public function getPantsById($id) // fonction qui retourne un pantalon selon le id
    {
        global $oPDO;
        $oPDOStmt = $oPDO->query("SELECT * FROM pantalon where id_pants = $id");
        $pantalon = $oPDOStmt->fetch(PDO::FETCH_ASSOC);
        return $pantalon;
    }


    public function getPantsOrderdedWithSameBrand($brand) // fonction qui retourne une liste ordonne de tout les pantalons d'une meme marque
    {
        global $oPDO;
        $oPDOStmt = $oPDO->query("SELECT * FROM pantalon WHERE marque LIKE '%$brand%' ORDER BY id_pants ASC");
        $pantalon = $oPDOStmt->fetchAll(PDO::FETCH_ASSOC);
        return $pantalon;
    }

    public function addNewPants($pants) // fonction qui permet de rajouter un pantalon
    {
        global $oPDO;

        $oPDOStmt = $oPDO->prepare('INSERT INTO pantalon (id_pants, name, marque, stock) VALUES (null,:Name, :Brand, :Stock)');
        $oPDOStmt->bindParam(':Name', $pants['name'], PDO::PARAM_STR);
        $oPDOStmt->bindParam(':Brand', $pants['marque'], PDO::PARAM_STR);
        $oPDOStmt->bindParam(':Stock', $pants['stock'], PDO::PARAM_INT);
        $oPDOStmt->execute();

        if ($oPDOStmt->rowCount() <= 0) {
            return false;
        }
        return $oPDO->lastInsertId();
    }

    public function updatePantsById($id, $pants) // fonction qui permet de modifier des elements pour un pantalon selon le id
    {
        global $oPDO;
        $oPDOStmt = $oPDO->prepare('UPDATE `pantalon` SET `name`=:Name, `marque`=:Brand, `stock`=:Stock WHERE id_pants =' . $id);
        $oPDOStmt->bindParam(':Name', $pants['name'], PDO::PARAM_STR);
        $oPDOStmt->bindParam(':Brand', $pants['marque'], PDO::PARAM_STR);
        $oPDOStmt->bindParam(':Stock', $pants['stock'], PDO::PARAM_INT);

        $oPDOStmt->execute();
    }

    public function deletePantsById($id) // fonction qui permet de supprimer un pantalon selon son id
    {
        global $oPDO;
        $oPDOStmt = $oPDO->prepare('DELETE FROM `pantalon` WHERE id_pants = :ID');
        $oPDOStmt->bindParam(':ID', $id, PDO::PARAM_INT);
        $oPDOStmt->execute();
    }
}
