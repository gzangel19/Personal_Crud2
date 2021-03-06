<?php   

    require_once("../config/conexion.php");
    require_once("../models/Producto.php");

    $producto = new Producto();

    $opcion = $_GET["opcion"];

    switch($opcion){
        
        case "listar":
            
            $datos = $producto->getProducto();

            $data = Array();

            foreach($datos as $row){

                $sub_array = array();

                $sub_array[] = $row["prod_id"];

                $sub_array[] = $row["prod_nombre"];

                $sub_array[] = $row["prod_descripcion"];

                $sub_array[] = date("d/m/Y", strtotime($row["prod_fecha"])); ;

                $sub_array[] = '<button type="button" onClick="editar('.$row['prod_id'].');" id="'.$row['prod_id'].'" class="btn btn-outline-success btn-icon"><i class="fa fa-edit"></i></div></button> 
                                <button type="button" onClick="eliminar('.$row['prod_id'].');" id="'.$row['prod_id'].'" class="btn btn-outline-danger btn-icon"><i class="fa fa-trash"></i></div></button>';

                $data[] = $sub_array;
            }

            $result = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data
            );

            echo json_encode($result);

        break;

        case "editarGuardar":

            $datos = $producto->getProducto_id($_POST['prod_id']);

            if(empty($_POST['prod_id'])):

                if(is_array($datos) == true && count($datos) == 0):

                    
                    $nombre = $_POST['prod_nombre'];

                    $descripcion = $_POST['prod_descripcion'];

                    $producto->insert_producto($nombre,$descripcion);

                endif;

            else:

                $id = $_POST['prod_id'];
                
                $nombre = $_POST['prod_nombre'];

                $descripcion = $_POST['prod_descripcion'];

                $producto->update_producto($id,$nombre,$descripcion);

            endif;
            
        break;

        case "eliminar":
            
            $producto->delete_producto($_POST["prod_id"]);

        break;

        case "mostrar":

            $datos = $producto->getProducto_id($_POST['prod_id']);

            if(is_array($datos) == true and count($datos) > 0):

                foreach($datos as $row):

                    $output['prod_id'] = $row['prod_id'];
                    $output['prod_nombre'] = $row['prod_nombre'];
                    $output['prod_descripcion'] = $row['prod_descripcion'];

                endforeach;

                echo json_encode($output);

            endif;
            
        break;

    }



?>