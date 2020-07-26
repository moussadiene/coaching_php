<?php

    require_once '../entities/Client.php';

    class ClientDB extends Client{
        //crud
        public function __construct(){  parent:: __construct(); }

        public function add(){
            $req = "INSERT INTO client (id,nom,prenom,telephone,adresse,salaire)
                VALUES (
                        $this->getId(),
                        $this->getNom(),
                        $this->getPrenom(),
                        $this->getTelephone(),
                        $this->getAdresse(),
                        $this->getSalaire()
                    )
            ";
            $resutat = $this->db->exec($req);

            return $resutat;
        }
    }
?>