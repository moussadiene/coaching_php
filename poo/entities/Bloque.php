<?php
class Bloque {

//attributs de Comptebloque
    private $numero;
    private $solde;
    private $fraisouv;
    private $remuneration;
    private $dateouv;
    private $dateferm;
    private $clientid;

//instantiation de Comptebloque
    public function __construct($numero=null, $solde, $fraisouv, $remuneration, $dateouv, $clientid,$dateferm)
    {
        $this->numero = $numero;
        $this->solde = $solde;
        $this->fraisouv = $fraisouv;
        $this->remuneration = $remuneration;
        $this->dateouv = $dateouv;
        $this->dateferm = $dateferm;
        $this->clientid = $clientid;
    }

//getter

    public function getNumero(){

        return $this->numero;

    } 
    public function getSolde(){

        return $this->solde;

    } 

    public function getFraisouv(){

        return $this->fraisouv;

    } 

    public function getNemuneration(){

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