<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Interface utilisateur : Coté Client</h1>
    <form action="../controller/ClientController.php" method="POST">
        <div class="titre">
            <h3>AJOUT Client</h3>
        </div>
        <div class="contenu">
            <div>
                <label for="">Nom :</label>
                <input type="text" name="nom" required>
            </div>
            <div>
                <label for="">Prenom :</label>
                <input type="text" name="prenom" required>
            </div>
            <div>
                <label for="">Telephone :</label>
                <input type="text" name="telephone" required>
            </div>
            <div>
                <label for="">Adresse :</label>
                <input type="text" name="adresse">
            </div>
            <div>
                <label for="">Salaire :</label>
                <input type="number" name="salaire">
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

                ?>
            </div>
        </div>
    </form>
</body>
</html>