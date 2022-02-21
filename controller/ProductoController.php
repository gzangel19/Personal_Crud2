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

                $sub_array[] = date("d/m/Y", strtotime($row["prod_fecha"])); ;

                $sub_array[] = '<button type="button" onclick="editarProducto('.$row['prod_id'].');" id="'.$row['prod_id'].'" class="btn btn-outline-primary btn-icon"><i class="fa fa-eye"></i></div></button> 
                                <button type="button" onclick="eliminarProducto('.$row['prod_id'].');" id="'.$row['prod_id'].'" class="btn btn-outline-danger btn-icon"><i class="fa fa-trash"></i></div></button>';

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

    }



?>