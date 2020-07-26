<?php

// se connecter

// elle represente notre base de données

Class FichierDB{

        // public static function param(){
        //         return array(
        //                 "host" => "localhost",
        //                 "user" => "djine",
        //                 "password" => "mosila21",
        //                 "dbname" => "gestion_de_stock",
        //         );

        // }

        public $db;

        public function __construct()
        {
                $this->db = $this->getConnexion();
        }

        private function getConnexion(){

                $host = "localhost";
                $user = "djine";        //root
                $password = "mosila21";     //""
                $dbname = "liveCoding";

                $dsn = "mysql:host=$host;dbname=$dbname";

                $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                );

                $dbh = new PDO($dsn, $user, $password, $options);

                return $dbh;
        }

}
?>