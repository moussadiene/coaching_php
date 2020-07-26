<?php
    class compte_epargne
    {
        private $solde;
        private $fraisOuverture;
        private $remuneration;
        private $dateOuverture;
        function __construct()//constructeur
        {
            //echo 'voici le constructeur
        }
        //setters

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