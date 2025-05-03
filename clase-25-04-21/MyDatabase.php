<?php
class MyDatabase{
     
    private $database;

    /*
    Recomendacion del profe traer los datos de config tanto por parametros 
    como en el archivo config en el constructor
    Hay proyectos, tareas en donde tendremos que conectarnos en 2 bbdd 
    por ej en caso de migracion de bbdd

    1ro me conecto a una bbdd vieja, me traigo los datos
    y lo paso a la nueva
    */
    public function __construct(){
        $config = parse_ini_file("config.ini");

        $this->database = new MySqli(
            $config["host"],
            $config["user"],
            $config["pass"],
            $config["db"],
            $config["puerto"]
        );

    }

    public function __destruct(){
        $this->database->close();
    }

    public function query($sql){
        //consultar
        $datos = $this->database->query($sql);
        return $datos-> fetch_all(MYSQLI_ASSOC);//validar que aveces no trae datos
    }

}