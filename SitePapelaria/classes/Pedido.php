<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedido
 *
 * @author Luís Mendes
 */
class Pedido {
    
    private $dataEntrega;
    private $dataCompra;
    private $dataPagamento;
    private $valorTotal;
    
    function __construct($dataEntrega, $dataCompra, $dataPagamento, $valorTotal) {
        $this->dataEntrega = $dataEntrega;
        $this->dataCompra = $dataCompra;
        $this->dataPagamento = $dataPagamento;
        $this->valorTotal = $valorTotal;
    }// fim do construtor

    public function getDataEntrega() {
        return $this->dataEntrega;
    }

    public function setDataEntrega($dataEntrega) {
        $this->dataEntrega = $dataEntrega;
    }

    public function getDataCompra() {
        return $this->dataCompra;
    }

    public function setDataCompra($dataCompra) {
        $this->dataCompra = $dataCompra;
    }

    public function getDataPagamento() {
        return $this->dataPagamento;
    }

    public function setDataPagamento($dataPagamento) {
        $this->dataPagamento = $dataPagamento;
    }

    public function getValorTotal() {
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal) {
        $this->valorTotal = $valorTotal;
    }
    
    
}

?>
