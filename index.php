<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Interface utilisateur : Coté Client</h1>
    <form action="#" method="POST">
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
        </div>
    </form>

    <?php
        extract($_POST);
       // var_dump($_POST);

        $host = "localhost"; 
        $user = "djine";        //root
        $password = "mosila21";     //""
        $dbname = "gestion_de_stock";

        $dsn = "mysql:host=$host;dbname=$dbname";

        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );

        $dbh = new PDO($dsn, $user, $password, $options);

        if($dbh == null){
            echo 'erreur';
        }else{
            // CRUD ===> create , read(selection = select) ; update (maj = mise a jour ); delete (suprimer)

            if(!empty($designation) && !empty($pu) && !empty($qte) ){
                //echo "tous les champs sont remplis";
                $pt = $qte * $pu;
                //INSERT INTO produit(id,designation,prix,quantite,prixtotal) VALUES (null,'lait',650,5,3250)

                // requete prepare
                $req = "INSERT INTO produit(id,designation,prix,quantite,prixtotal) VALUES (null,'$designation',$pu,$qte,$pt)";
                // executer
                $resutat = $dbh->exec($req);

                if($resutat == 1){
                    echo 'Information bien ajoutée';
                }else{
                    echo 'Erreur d\'ajoutée';
                }

            }else{
                 echo "remplir les champs";
            }
              // l'entete du tabeau
              echo "
              <table  style='border:solid 1px'>
                      <tr>
                          <td style='width:50px'>id</td>
                          <td style='width:100px'>désignation</td>
                          <td style='width:100px'>prix unitaire</td>
                          <td style='width:100px'>quantité</td>
                          <td style='width:100px'>total</td>
                      </tr>

              ";
            //SELECT * FROM `produit` WHERE 1

            $requete = "SELECT * FROM produit ";

            // recuperer la l'objet produit
            $objet = $dbh->query($requete);

            // les lignes de l'objet ===> au tableau
            $list = $objet->fetchAll();

            //var_dump($list);

            // corps du tabeau 

            foreach  ($list as $row) {
                echo "
                <tr>
                 <td style='width:50px'>".$row['id']."</td>
                 <td style='width:100px'>".$row['designation']."</td>
                 <td style='width:100px'>".$row['prix']." F</td>
                 <td style='width:100px'>".$row['quantite']."</td>
                 <td style='width:100px'>".$row['prixtotal']." F</td>
             </tr>
                
            ";
             }
        }

    ?>
</body>
</html>