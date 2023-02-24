<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Venda
 *
 * @author Luís Mendes
 */
class Venda {
     
    private $codVenda;
    private $valorTotal;
    private $itensVendidos = array("1"=>"10","1"=>"10");
    private $desconto;
    private $tipoVenda;
    
    function __construct($codVenda, $valorTotal, $itensVendidos, $desconto, $tipoVenda) {
        $this->codVenda = $codVenda;
        $this->valorTotal = $valorTotal;
        $this->setItensVendidos($itensVendidos);
        $this->desconto = $desconto;
        $this->tipoVenda = $tipoVenda;
    }

    public function getCodVenda() {
        return $this->codVenda;
    }

    public function setCodVenda($codVenda) {
        $this->codVenda = $codVenda;
    }

    public function getValorTotal() {
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal) {
        $this->valorTotal = $valorTotal;
    }

    public function getItensVendidos() {
        return $this->itensVendidos;
    }

    public function setItensVendidos($itensVendidos) {
        $this->itensVendidos = $itensVendidos;
    }

    public function getDesconto() {
        return $this->desconto;
    }

    public function setDesconto($desconto) {
        $this->desconto = $desconto;
    }

    public function getTipoVenda() {
        return $this->tipoVenda;
    }

    public function setTipoVenda($tipoVenda) {
        $this->tipoVenda = $tipoVenda;
    }

    
    public function buscar($cpf) {
        
    }
    
    public function vender() {
        echo "método vender da classe Venda";
    }

    public function vendaProduto($codBarra) {
        
    }

    
}

?>
