<?php

require_once "DataHandler.php";

class Model {

    public function __construct() {
        $this->dataHandler = new DataHandler(DB_HOST, DB_DB, DB_USERNAME, DB_PASSWORD);
    }


//    public function printEtenkaart(){
//        return $this->dataHandler->readData(
//            "SELECT * FROM `categorie` INNER JOIN product ON categorie.categorie_id = product.categorie_id"
//        );
//    }

    public function readSQL($sql)
    {
        return $this->dataHandler->readData($sql);
    }


}