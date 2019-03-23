<?php
/**
 * Created by PhpStorm.
 * User: abuzar
 * Date: 17-2-2019
 * Time: 21:27
 */

require_once "model/HTMLElements.php";
require_once "model/Model.php";

class Reserve
{

    public function __construct()
    {
        $this->HtmlElements = new HtmlElements();
        $this->Model = new Model();

    }

    public function form()
    {
        include "view/Reserveren.php";
        if(isset($_POST['submit'])){
            extract($_POST);
            $this->Model->create("
            insert into reservering
            (aantal_personen,gereserveerd_op,tafelnummer,gereserveerd_voor,naam,achternaam,telefoonnummer)
            VALUES ('$aantal',NOW(),'$tafel','$datum','$naam','$achternaam','$telefoon') ");
        }

    }

    public function reserveren(){

    }


}
