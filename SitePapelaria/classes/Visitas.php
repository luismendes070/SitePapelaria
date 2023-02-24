<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Visitas
 *
 * @author Luís Mendes
 */
class Visitas {
    
    private static $visitantes = 0;
    
    function __construct() {
        self::$visitantes++;
    }
    
    static function getVisitantes(){
        return self::visitantes;
    }    
}

?>
