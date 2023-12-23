<?php
require_once("../config/conexion.php");
require_once("../models/ProductoMdl.php");
$producto=new Producto();
switch ($_GET['op']) {
    case 'guardar':
        $datos=$producto->insert_producto($_POST['nombre_producto']);
        if (empty($_FILES['file']['name'])) {
        }else{
            $countfiles=count($_FILES['file']['name']);
            $ruta="../assets/img";
            $files_arr=array();
            if (!file_exists($ruta)) {
                mkdir($ruta, 0777, true);
            }
            for ($index=0; $index < $countfiles; $index++) { 
                $nombre=$_FILES['file']['tmp_name'][$index];
                $destino=$ruta.$_FILES['file']['name'][$index];
                /* foreach ($datos as $row) {
                    $producto->insert_imagenes($row['prod_id'],$nombre);
                } */
                move_uploaded_file($nombre,$destino);
            }
        } 
        echo json_encode($datos);
        break;    
}
?>