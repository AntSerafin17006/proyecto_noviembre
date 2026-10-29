<?php
class Sesion{
    public static function iniciar(){

    }

    public static function existe(string $clave){

    }

    public static function leer(string $clave){

    }

    public static function escribir($clave, $valor){
        $_SESSION[$clave] = $valor;
    }
    
    public static function eliminar($clave){

    }
}