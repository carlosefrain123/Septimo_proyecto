<?php
class Producto extends Conectar{
    public function insert_producto($nombre_producto){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql=$conectar->prepare("INSERT INTO producto(prod_id,nombre_producto) VALUES(NULL,:nombre_producto)");   
        $sql->bindParam(':nombre_producto',$nombre_producto);
        return $sql->execute();
    }
}
?>