<?php

    class conectar{

        protected $dbHost;
        
        
        protected function Conexion(){

            try{

                $conectar = $this->dbHost = new PDO("mysql:local=localhost;dbname=crud2","root","123456");

                return $conectar;
            }
            catch(Exception $e){

                print("! Error en la Base de Datos ! ". $e->getMessage() . "<br/>");

                die();

            }
        }

        public function set_names(){

            return $this->dbHost->query("SET NAMES 'utf8'");

        }


    } 

?>