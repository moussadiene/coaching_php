<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Interface utilisateur : Coté Client</h1>
    <form action="../controller/fichierController.php" method="POST">
        <div class="titre">
            <h3>AJOUT PRODUIT</h3>
        </div>
        <div class="contenu">
            <div>
                <label for="">Désignation :</label>
                <input type="text" name="designation">
            </div>
            <div>
                <label for="">Prix unitaure:</label>
                <input type="number" name="pu">
            </div>
            <div>
                <label for="">Quantité :</label>
                <input type="number" name="qte">
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
            <div>
                <?php
                // notification 
                    if(isset($_GET['res'])){

                        if($_GET['res'] == 1){
                            echo 'Information bien ajoutée';
                        }else{
                            echo 'Erreur d\'ajoutée';
                        }
                    }

                    if(isset($_GET['name'])){
                        echo "remplir les champs";
                    }
                ?>
            </div>
        </div>
    </form>
    <table  style='border:solid 1px'>
        <tr>
            <td style='width:50px'>id</td>
            <td style='width:100px'>désignation</td>
            <td style='width:100px'>prix unitaire</td>
            <td style='width:100px'>quantité</td>
            <td style='width:100px'>total</td>
        </tr>
    <?php
        require_once '../model/fichierDB.php';
        $list = listeProduit();

        foreach  ($list as $row) :?>

            <tr>
                <td style='width:50px'><?php echo $row['id'] ?></td>
                <td style='width:100px'><?php echo $row['designation']?></td>
                <td style='width:100px'><?php echo $row['prix']?> F</td>
                <td style='width:100px'><?php echo $row['quantite']?></td>
                <td style='width:100px'><?php echo $row['prixtotal']?>  F</td>
            </tr>

        <?php endforeach?>
</body>
</html>