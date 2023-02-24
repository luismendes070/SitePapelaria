<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fornecedor
 *
 * @author Luís Mendes
 */
class Fornecedor {
    
    private $nome;
    private $telefone;
    private $cnpj;
    private $nomeEmpresa;
    private $telefoneEmpresa;
    
    function __construct($nome, $telefone, $cnpj, $nomeEmpresa, $telefoneEmpresa) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->cnpj = $cnpj;
        $this->nomeEmpresa = $nomeEmpresa;
        $this->telefoneEmpresa = $telefoneEmpresa;
    }//fim do construtor

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getNomeEmpresa() {
        return $this->nomeEmpresa;
    }

    public function setNomeEmpresa($nomeEmpresa) {
        $this->nomeEmpresa = $nomeEmpresa;
    }

    public function getTelefoneEmpresa() {
        return $this->telefoneEmpresa;
    }

    public function setTelefoneEmpresa($telefoneEmpresa) {
        $this->telefoneEmpresa = $telefoneEmpresa;
    }


    
}//fim da classe Funcionario


?>
