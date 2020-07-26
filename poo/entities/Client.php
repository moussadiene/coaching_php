<?php

    require_once '../model/FichierDB.php';
    Class Client extends FichierDB{
        //atribut
        private $id;
        private $nom;
        private $prenom;
        private $telephone;
        private $cni;
        private $adresse;
        private $salaire;

        public function setId($id){return $this->id = $id; }
        public function getId(){$this->id; }
        // public function __construct($id = null,$nom,$prenom,$telephone,$cni,$adresse = null,$salaire = null)
        // {
        //     $this->id = $id;
        //     $this->nom = $nom;
        //     $this->prenom = $prenom;
        //     $this->telephone = $telephone;
        //     $this->cni = $cni;
        //     $this->adresse = $adresse;
        //     $this->salaire = $salaire;
        // }

        public function __construct() { }

        //setters & getters

        public function setNom($nom){ return $this->nom = $nom;}
        public function getNom() {$this->nom; }


        public function setPrenom($prenom){
            return $this->prenom = $prenom;
        }
        public function setTelephone($telephone){
            return $this->telephone = $telephone;
        }
        public function setcni($cni){
            return $this->cni = $cni;
        }
        public function setadresse($adresse = null){
            return $this->adresse = $adresse;
        }
        public function setSalaire($salaire = null){
            return $this->salaire = $salaire;
        }

        //getters

        public function getPrenom()
        {
            $this->prenom;
        }
        public function getTelephone()
        {
            $this->telephone;
        }
        public function getcni(){
            $this->cni;
        }
        public function getAdresse(){
            $this->adresse;
        }
        public function getSalaire(){
            $this->salaire;
        }
    }

?>