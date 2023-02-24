<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BancoDeDados
 *
 * @author Luís Mendes
 */
class BDVendaAPrazo implements BD{

    function __construct($classe) {

        if ($classe instanceof VendaAPrazo) {
            
        } else {
            echo $classe . " não é instância de VendaAPrazo";
        }
    }

    public function alterar() {
        
    }

    public function cadastrar() {
        
    }

    public function excluir() {
        
    }

    public function buscar() {
        
    }

}

?>
