<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VendaAPrazo
 *
 * @author Lu�s Mendes
 */
class VendaAPrazo extends Venda{
    
    private $dataVenda;
    
    function __construct($dataVenda) {
        $this->dataVenda = $dataVenda;
    }
    
    public function vender() {
        echo "m�todo vender da classe VendaAPrazo";
    }

    
    
    
}//fim da classe VendaAPrazo

?>
