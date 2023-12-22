<?php
class Conectar{
    protected $dbh;
    protected function Conexion(){
        try {
            $conectar=$this->dbh=new PDO("mysql:local=localhost;dbname=practicg","root","");
        } catch (Exception $e) {
            print "¡Error BD!: ".$e->getMessage()."<br/>";
            die();
        }
    }
}
?>