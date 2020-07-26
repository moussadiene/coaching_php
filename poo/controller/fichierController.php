<?php
extract($_POST);

require_once '../model/fichierDB.php';

$db = getConnexion();

if($db == null){
    //echo 'erreur';
    header('location:../view/index.php');
}else{

    if(!empty($designation) && !empty($pu) && !empty($qte) ){

        $pt = $qte * $pu;

        $resutat = ajoutProduit($designation,$pu,$qte,$pt);


        if($resutat == 1){
            //echo 'Information bien ajoutée';
            header("location:../view/index.php?res=$resutat");
        }else{
            //echo 'Erreur d\'ajoutée';
            header("location:../view/index.php?res=$resutat");
        }

    }else{
        //echo "remplir les champs";
        header("location:../view/index.php?name=0");
    }
}
    ?>