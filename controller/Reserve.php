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

    public function reserveren()
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

    public function reserveringen(){
        $array = $this->Model->read("SELECT reservering_id, `aantal_personen` as `aantal personen` ,`gebruikt`,`tafelnummer`,`gereserveerd_voor` as `reserveer datum`,`naam`,`achternaam`,`telefoonnummer` FROM `reservering`");
        $table2 = $this->HtmlElements->clickableLink($array);
        $table = $this->HtmlElements->printTable($table2);
        include "view/Reserveringen.php";

    }


}
