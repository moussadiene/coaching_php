<?php
require_once '../entities/Epargne.php';
class EpargneDB extends Epargne
{
    //crud
    public function __construct(){parent:: __construct();}

    public function add(){
        $req="INSERT INTO epargne (numero, solde,fraisouv,remuneration,dateouv)
        VALUES(
            $this->getNumero();
            $this->getSolde();
            $this->getFraisOuverture();
            $this->getRemuneration();
            $this->getdateOuverture();
        )";
        $resultat=$this->db->exec($req);

        return $resultat;
    }
}

?>