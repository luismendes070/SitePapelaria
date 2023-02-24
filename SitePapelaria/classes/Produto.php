<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author Luis Mendes
 */
class Produto {

    private $codBarras;
    private $descricao;
    private $porcentagem;
    private $qtdeEstoque;
    private $nome;
    private $valorCusto;
    private $marca;
    private $precoVenda;
    private $nomeImagem;
    private $cnpjFornecedor;
    private $categoria;
    
    function __construct($codBarras, $descricao, $porcentagem, $qtdeEstoque, $nome, $valorCusto, $marca, $precoVenda, $nomeImagem, $cnpjFornecedor, $categoria) {
        $this->codBarras = $codBarras;
        $this->descricao = $descricao;
        $this->porcentagem = $porcentagem;
        $this->qtdeEstoque = $qtdeEstoque;
        $this->nome = $nome;
        $this->valorCusto = $valorCusto;
        $this->marca = $marca;
        $this->precoVenda = $precoVenda;
        $this->nomeImagem = $nomeImagem;
        $this->cnpjFornecedor = $cnpjFornecedor;
        $this->categoria = $categoria;
    }

    public function getCodBarras() {
        return $this->codBarras;
    }

    public function setCodBarras($codBarras) {
        $this->codBarras = $codBarras;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getPorcentagem() {
        return $this->porcentagem;
    }

    public function setPorcentagem($porcentagem) {
        $this->porcentagem = $porcentagem;
    }

    public function getQtdeEstoque() {
        return $this->qtdeEstoque;
    }

    public function setQtdeEstoque($qtdeEstoque) {
        $this->qtdeEstoque = $qtdeEstoque;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getValorCusto() {
        return $this->valorCusto;
    }

    public function setValorCusto($valorCusto) {
        $this->valorCusto = $valorCusto;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getPrecoVenda() {
        return $this->precoVenda;
    }

    public function setPrecoVenda($precoVenda) {
        $this->precoVenda = $precoVenda;
    }

    public function getNomeImagem() {
        return $this->nomeImagem;
    }

    public function setNomeImagem($nomeImagem) {
        $this->nomeImagem = $nomeImagem;
    }

    public function getCnpjFornecedor() {
        return $this->cnpjFornecedor;
    }

    public function setCnpjFornecedor($cnpjFornecedor) {
        $this->cnpjFornecedor = $cnpjFornecedor;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }


    
}

?>
