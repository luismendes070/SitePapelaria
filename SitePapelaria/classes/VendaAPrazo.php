<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VendaAPrazo
 *
 * @author Luís Mendes
 */
class VendaAPrazo extends Venda{
    
    private $dataVenda;
    
    function __construct($dataVenda) {
        $this->dataVenda = $dataVenda;
    }
    
    public function vender() {
        echo "método vender da classe VendaAPrazo";
    }

    
    
    
}//fim da classe VendaAPrazo

?>
