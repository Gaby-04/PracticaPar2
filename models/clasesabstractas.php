
<?php

require_once "clasepadre.php";

abstract class Aves extends Animal
{
    public static function nombre(){}
    public static function tipo(){}
    public static function viven(){}
    public static function descripcion(){}

}


abstract class Avestruces extends Aves{

    
    public static  function nombre(){
        return 'Avestruz';
    }
    public static function tipo(){
        return 'vertebrado';
    }
    public static function viven(){
        return "son aves que viven en la tierra ya que no pueden volar";
    }
    public static function Modo(){
        return "los avestruces son amigables";
    }
    public static function descripcion(){
        return "El avestruz​ es una especie de ave estrutioniforme de la familia Struthionidae.​ Es un ave grande que no vuela, sino que es corredora. Se halla en África, y en tiempos pasados también habitó en Oriente Medio.";
    }

    
    public static function correr(){

        return "corren muy Rapidp";
        
    }
    public static  function volar(){
        return "no vuela mucho";
    }
    public static function cantar(){
        return "Canta muy Duro";
    }
}