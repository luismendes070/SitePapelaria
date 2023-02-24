<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author Luís Mendes
 */
class Funcionario {
    
    private $nome;
    private $cpf;
    private $telefone;
    private $login;
    private $senha;
    
    function __construct($nome, $cpf, $telefone, $login, $senha) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->login = $login;
        $this->senha = $senha;
    }// fim do construtor

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

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function fazPedido(){
        
        echo "Método faz Pedido";
        
    }//fim do método faz pedido
    
    public function atualizaProdutos($quantidadeEmEstoque) {
        echo "Método atualiza Produtos";
    }
    
    
}// fim da classe

?>
