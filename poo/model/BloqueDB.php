<?php

require_once '../entities/Bloque.php';
class BloqueDB extends Bloque{

    public function __construct(){ parent::__construct(); }

    public function addBloque()
    {
        $req = "INSERT INTO bloque (numero, solde, fraisouv, remuneration, dateouv, dateferm, idclient)
        VALUES (
            $this->getNumero();
            $this->getSolde();
            $this->getFraisouv();
            $this->getRemuneration();
            $this->getDateouv();
            $this->getDateferm();
            $this->getClientid();
        ";
            $result = $this->db->exec($req);
            return $result;

    }

}

?>