<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Luis Mendes
 */
class Cliente {
    
    private $nome;
    private $cpf;
    private $dataCadastro;
    private $dataNascimento;
    private $rg;
    private $telefone;
    private $endereco;
    
    private $lojas = array();
    
    private $situacao;
    private $nomeImagem;
    
    function __construct($nome, $cpf, $dataCadastro, $dataNascimento, $rg, $telefone, $endereco, $lojas, $situacao, $nomeImagem) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataCadastro = $dataCadastro;
        $this->dataNascimento = $dataNascimento;
        $this->rg = $rg;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->lojas = $lojas;
        $this->nomeImagem = $nomeImagem;
        
        /*Teste se vetor tem objetos inseridos*/ 
        //$l = $lojas[0]; 
        //echo "<br>Vetor passado por paramentro:".$l->getNomeLoja()."<br>";
        
        $this->situacao = $situacao;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getRg() {
        return $this->rg;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getLojas() {
        return $this->lojas;
    }

    public function setLojas($lojas) {
        $this->lojas = $lojas;
    }

    public function getSituacao() {
        return $this->situacao;
    }

    public function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

    public function getNomeImagem() {
        return $this->nomeImagem;
    }

    public function setNomeImagem($nomeImagem) {
        $this->nomeImagem = $nomeImagem;
    }

} // end class Cliente

?>
