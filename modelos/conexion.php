<?php

abstract class  Conexion{
    public static $conexion = null;

    private static function conectar(){
        try{
            self::$conexion = new PDO("informix:host=host.docker.internal; service=9088;database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix", "in4mix");
        }catch(PDOException $e){
            echo "ERROR DE CONEXION DE BD";
            exit;

        }
        return self::$conexion;
    }
}