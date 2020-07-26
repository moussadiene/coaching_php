<?php

require_once '../model/ClientDB.php';

    class ClientController{

        //extract($_POST);

        public function addClient()
        {
            extract($_POST);
            $client = new $ClientDB();
        }
    }

?>