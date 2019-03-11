<?php
/**
 * Created by PhpStorm.
 * User: abuzar
 * Date: 17-2-2019
 * Time: 21:27
 */

require_once "model/HTMLElements.php";
require_once "model/Model.php";

class Menu
{

    public function __construct()
    {
        $this->HtmlElements = new HtmlElements();
        $this->Model = new Model();

    }

    public function eten()
    {

        $HG = $this->HtmlElements->tableHorizontalRows($this->Model->readSQL("SELECT product.naam,product.beschrijving,product.prijs FROM product INNER JOIN categorie on product.categorie_id = categorie.categorie_id WHERE parent_id = 4"));
        $BG = $this->HtmlElements->tableHorizontalRows($this->Model->readSQL("SELECT product.naam,product.beschrijving,product.prijs FROM product INNER JOIN categorie on product.categorie_id = categorie.categorie_id WHERE parent_id = 3"));
        include "view/menukaart.php";
    }

    public function drank()
    {

        $table = $this->HtmlElements->tableHorizontalRows($this->Model->readSQL("SELECT product.naam,product.beschrijving,product.prijs FROM product INNER JOIN categorie on product.categorie_id = categorie.categorie_id WHERE parent_id = 1"));

        include "view/drankkaart.php";
    }

}
