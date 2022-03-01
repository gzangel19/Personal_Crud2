<?php

    class Producto extends Conectar{


        public function getProducto(){

            $conectar = parent::Conexion();
            
            parent::set_names();

            $sql = "SELECT * FROM tm_productos WHERE prod_estado = 1";

            $sql = $conectar->prepare($sql);

            $sql->execute();

            return $resultado = $sql->fetchAll();
        }

        public function getProducto_id($prod_id){

            $conectar = parent::Conexion();
            
            parent::set_names();

            $sql = "SELECT * FROM tm_productos WHERE prod_id = ?";

            $sql = $conectar->prepare($sql);

            $sql->bindValue(1,$prod_id);

            $sql->execute();

            return $resultado = $sql->fetchAll();
        }

        public function delete_producto($prod_id){

            $conectar = parent::Conexion();
            
            parent::set_names();

            $sql = "UPDATE tm_productos SET prod_estado = 0,prod_fecha_del = now() WHERE prod_id = ?";

            $sql = $conectar->prepare($sql);

            $sql->bindValue(1,$prod_id);

            $sql->execute();

            return $resultado = $sql->fetchAll();
        }

        public function insert_producto($prod_descripcion,$prod_nombre){

            $conectar = parent::Conexion();
            
            parent::set_names();

            $sql="INSERT INTO tm_productos (prod_id, prod_nombre,prod_descripcion, prod_fecha, prod_fecha_mod, prod_fecha_del, prod_estado) VALUES (NULL,?,?, now(), NULL, NULL, 1);";

            $sql = $conectar->prepare($sql);

            $sql->bindValue(1,$prod_descripcion);

            $sql->bindValue(2,$prod_nombre);

            $sql->execute();

            return $resultado = $sql->fetchAll();
        }


        public function update_producto($prod_id,$prod_nom,$prod_descripcion){

            $conectar = parent::Conexion();
            
            parent::set_names();

            $sql = "UPDATE tm_productos 
                    SET prod_nombre = ?,
                        prod_descripcion = ?,
                        prod_fecha_mod = now()
                    WHERE prod_id = ?";

            $sql = $conectar->prepare($sql);

            $sql->bindValue(1,$prod_nom);
            $sql->bindValue(2,$prod_descripcion);
            $sql->bindValue(3,$prod_id);
            $sql->execute();

            return $resultado = $sql->fetchAll();
        }


        
    }

?>