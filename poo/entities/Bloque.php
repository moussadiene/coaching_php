<?php


class Bloque extends FichierDB{

//attributs de Comptebloque
    private $numero;
    private $solde;
    private $fraisouv;
    private $remuneration;
    private $dateouv;
    private $dateferm;
    private $clientid;

//instantiation de Comptebloque
    // public function __construct($numero=null, $solde, $fraisouv, $remuneration, $dateouv, $clientid,$dateferm)
    // {
    //     parent::__construct();
    //     $this->numero = $numero;
    //     $this->solde = $solde;
    //     $this->fraisouv = $fraisouv;
    //     $this->remuneration = $remuneration;
    //     $this->dateouv = $dateouv;
    //     $this->dateferm = $dateferm;
    //     $this->clientid = $clientid;
    // }

    public function __construct(){ parent::__construct(); }

//getters

    public function getNumero(){

        return $this->numero;

    }
    public function getSolde(){

        return $this->solde;

    }

    public function getFraisouv(){

        return $this->fraisouv;

    } 

    public function getRemuneration(){

        return $this->remuneration;

    } 

    public function getDateouv(){

        return $this->dateouv;

    } 
    public function getDateferm(){

        return $this->dateferm;

    } 

    public function getClientid(){

        return $this->clientid;

    } 
}
?>