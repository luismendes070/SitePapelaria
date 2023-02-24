<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Loja
 *
 * @author Luís Mendes
 */
class Loja {
    
    private $nomeLoja;
    private $telefoneLoja;
    
    function __construct($nomeLoja, $telefoneLoja) {
        $this->nomeLoja = $nomeLoja;
        $this->telefoneLoja = $telefoneLoja;
    }

    public function getNomeLoja() {
        return $this->nomeLoja;
    }

    public function setNomeLoja($nomeLoja) {
        $this->nomeLoja = $nomeLoja;
    }

    public function getTelefoneLoja() {
        return $this->telefoneLoja;
    }

    public function setTelefoneLoja($telefoneLoja) {
        $this->telefoneLoja = $telefoneLoja;
    }
    
}

?>
