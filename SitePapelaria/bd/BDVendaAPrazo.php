<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BancoDeDados
 *
 * @author Lu�s Mendes
 */
class BDVendaAPrazo implements BD{

    function __construct($classe) {

        if ($classe instanceof VendaAPrazo) {
            
        } else {
            echo $classe . " n�o � inst�ncia de VendaAPrazo";
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
