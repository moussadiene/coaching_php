<?php

// se connecter

function getConnexion(){

        $host = "localhost";
        $user = "djine";        //root
        $password = "mosila21";     //""
        $dbname = "gestion_de_stock";

        $dsn = "mysql:host=$host;dbname=$dbname";

        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );

        $dbh = new PDO($dsn, $user, $password, $options);

        return $dbh;
}

// ajouter
function ajoutProduit($designation,$pu,$qte,$pt){
        $req = "INSERT INTO produit(id,designation,prix,quantite,prixtotal) VALUES (null,'$designation',$pu,$qte,$pt)";
        // executer

        $dbh = getConnexion(); // de se connecter

        $resutat = $dbh->exec($req); // d'ajouter les information

        return $resutat;

}


// lister
function listeProduit(){
        $requete = "SELECT * FROM produit ";
        $dbh = getConnexion(); // de se connecter

        $objet = $dbh->query($requete); // recuperer la l'objet produit

        $list = $objet->fetchAll(); // les lignes de l'objet ===> au tableau

        return $list;
}

?>