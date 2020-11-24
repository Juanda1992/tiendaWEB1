<?php

class Basedatos {

    // Variables o atributos

        public $usuarioBD="root";
        public $passwordBD="";

        // Constructor
        
        public function __construct(){}

        // Funciones o metodos

        public function conectarBD(){

        

            // if($conexionBD){
            //     echo("conexion con exito");

            // }
            // else{
            //     echo("error en la conexion");

            // }

            try{

                $datosBD="mysql:host=localhost;dbname=tiendaweb2";
                $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
                return ($conexionBD);

            }catch(PDOExeption $error){

                echo($error ->getMessage () );
            }
            

        }
        public function agregarDatos ($consultaSQL){
            
            // 1.Conectarse a la Base de datos
            $conexionBD=$this->conectarBD();

            //2. Preparar la consulta 
            $consultaInsertarDatos = $conexionBD->prepare($consultaSQL);

            //3. Ejecutar la consulta
            $resultado=$consultaInsertarDatos->execute();

            //4. Verificar resutaldo
            if($resultado){
                echo("Registro agregado con exito");

            }else{
                echo("Error agregando el registro");
            }

        }
        public function consultarDatos($consultaSQL){
            // 1.Conectarse a la Base de datos
            $conexionBD=$this->conectarBD();

            //2. Preparar la consulta 
            $consultaBuscarDatos = $conexionBD->prepare($consultaSQL);

            //3. Definiri la forma en la que vamos a traer los datos
            //setFetchMode
            $consultaBuscarDatos ->setFetchMode(PDO::FETCH_ASSOC);

            //4.Ejecutar la consulta
            $consultaBuscarDatos->execute();

            //5.Retornar los datos consultados
            return($consultaBuscarDatos->fetchAll());
        }  
        public function eliminarDatos($consultaSQL){

            // 1.Conectarse a la Base de datos
            $conexionBD=$this->conectarBD();

            //2. Preparar la consulta 
            $consultaEliminarDatos = $conexionBD->prepare($consultaSQL);

            //3. Ejecutar la consulta
            $resultado=$consultaEliminarDatos->execute();

            //4. Verificar resutaldo
            if($resultado){
                echo("Registro eliminado con exito");

            }else{
                echo("Error eliminando el registro");
            }    

        }   
        public function editarDatos($consultaSQL){
             // 1.Conectarse a la Base de datos
             $conexionBD=$this->conectarBD();

             //2. Preparar la consulta 
             $consultaEditarDatos = $conexionBD->prepare($consultaSQL);
 
             //3. Ejecutar la consulta
             $resultado=$consultaEditarDatos->execute();
 
             //4. Verificar resutaldo
             if($resultado){
                 echo("Registro editado con exito");
 
             }else{
                 echo("Error editando el registro");
             }
        }
}



?>