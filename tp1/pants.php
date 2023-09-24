<?php
require_once "pantalon.php";
class pants extends pantalon
{

    public function SeeAllPants()
    {
        $pantalon1 = new pants;
        $Allpants = $pantalon1->getAllPants();

        echo '<div class="container"><br/>
        <label><b><u> Pantalons disponibles : </u></b></label>
        <table>
            <tr>
                <th>Nom</th>
                <th>Marque</th>
                <th>Stock</th>
            </tr>';
        foreach ($Allpants as $pantalon) {
            echo '<tr>';
            echo '<td>' . $pantalon["name"] . '</td>';
            echo '<td>' . $pantalon["marque"] . '</td>';
            echo '<td>' . $pantalon["stock"] . '</td>';
            echo '</tr>';
        }
        echo '</table></div>';
    }

    public function NewPants()
    {
        echo '<form action="newPants.php" method="POST">
                <label>Nom du pantalon: </label>
                <input name="nameP" id="nameP"/>
                <br>
                <label>Marque du pantalon: </label>
                <input name="brandP" id="brandP"/>
                <br>
                <label>Quantite en stock: </label>
                <input name="stockP" id="stockP"/>
                <br>
                <button>Enregistrer</button>
            </form>';
    }

    public function updatedPants()
    {

        echo '<form action="updatePants.php" method="POST">
        <label>Quel est le id du pantalon a changer?</label>
        <input name="id" id="id">
        <br>
        <label>Nom du pantalon: </label>
        <input name="nameP" id="nameP"/>
        <br>
        <label>Marque du pantalon: </label>
        <input name="brandP" id="brandP"/>
        <br>
        <label>Quantité en stock: </label>
        <input name="stockP" id="stockP" />
        <br>
        <button>Mise a jour</button>
        </form>';
    }

    public function deletePants()
    {
        echo '<form action="#" method="POST">
        <label>Quel est le id du pantalon a supprimer?</label>
        <input name="id" id="id" type="number">
        <button>Supprimer</button>
        </form>';
    }
}
