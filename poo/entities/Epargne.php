<?php

require_once '../model/FichierDB.php';

    Class Epargne extends FichierDB
    {
        private $numero;
        private $solde;
        private $fraisOuverture;
        private $remuneration;
        private $dateOuverture;
        function __construct(){
            parent::__construct();
        }
        //setters

        public function setNumero($numero = null)
        {
            $this->numero = $numero;
        }
        public function setSolde($solde)
        {
            $this->solde = $solde;
        }
        public function setFraisOuverture($fraisOuverture)
        {
            $this->fraisOuverture = $fraisOuverture;
        }
        public function setRemuneration($remuneration)
        {
            $this->remuneration = $remuneration;
        }
        public function setDateOuverture($dateOuverture)
        {
            $this->dateOuverture = $dateOuverture;
        }
        //getters
        public function getNumero()
        {
            return $this->numero;
        }
        public function getSolde()
        {
            return $this->solde;
        }
        public function getFraisOuverture()
        {
            return $this->fraisOuverture;
        }
        public function getRemuneration()
        {
            return $this->remuneration;
        }
        public function getdateOuverture()
        {
            return $this->dateOuverture;
        }
    }
?>