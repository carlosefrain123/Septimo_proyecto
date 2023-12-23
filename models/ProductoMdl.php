<?php
class Producto extends Conectar{
    public function insert_producto($nombre_producto){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql=$conectar->prepare("INSERT INTO producto(prod_id,nombre_producto) VALUES(NULL,:nombre_producto)");   
        $sql->bindParam(':nombre_producto',$nombre_producto);
        $sql->execute();

        $sql1="select last_insert_id() as 'prod_id';";//Devolver el ultimo ID
        $sql1=$conectar->prepare($sql1);
        $sql1->execute();
        return $resultado=$sql1->fetchAll(pdo::FETCH_ASSOC);
    }
    public function insert_imagenes($prod_id,$imgd_nom){
        $conectar=parent::Conexion();
        $sql=$conectar->prepare("INSERT INTO imagen(imgd_id,prod_id,imgd_nom) VALUES (null,:prod_id,:imgd_nom)");
        $sql->bindParam(':prod_id',$prod_id);
        $sql->bindParam(':imgd_nom',$imgd_nom);
        $sql->execute();
    }
}
?>