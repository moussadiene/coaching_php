<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Addition de deux nombre !!!</h1>
        <form action="#" method="POST">
            <label for="">nombre 1 :</label>
            <input type="number" name="n1"><br><br>
            <label for="">nombre 2 :</label>
            <input type="number" name="n2">
            <input type="submit" value="Envoyer">
        </form>
        <?php
            extract($_POST);

            //if(isset($n1)){
            if(!empty($n1) && !empty($n2) ){
                $som = $n1+$n2;
                //echo "la somme est : ".$som;
                echo $n1.' + '.$n2. ' = '.$som;
            }
            // }else{
            //     echo "remplsdfgfcn ";
            // }



             /*
            <?php
            $dsn = 'mysql:host=localhost;dbname=testdb';
            $username = 'username';
            $password = 'password';
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            );

            $dbh = new PDO($dsn, $username, $password, $options);
            ?>
        */






        /*
                <?php
                $sql =  'SELECT name, color, calories FROM fruit ORDER BY name';
                foreach  ($conn->query($sql) as $row) {
                    print $row['name'] . "\t";
                    print  $row['color'] . "\t";
                    print $row['calories'] . "\n";
                }
                ?>


                

        */


        /***
         * 
         * 
         * <?php
                $sth = $dbh->prepare("SELECT nom, couleur FROM fruit");
                $sth->execute();
                Récupération de toutes les lignes d'un jeu de résultats 
                print("Récupération de toutes les lignes d'un jeu de résultats :\n");
                $result = $sth->fetchAll();
                print_r($result);
                ?>
         */
        ?>

        
    </body>

</html>