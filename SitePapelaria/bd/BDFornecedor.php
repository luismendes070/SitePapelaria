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
require_once 'file:///c:/xampp/htdocs/SitePapelaria/bd/Bd.php';

class BDFornecedor implements BD {

    function __construct() {
        
    }

    public function alterar() {
        
    }

    public function cadastrar() {
        $conexao = new mysqli("localhost", "root", "", "papelaria2");

        if ($conexao->connect_errno) {
            echo "Erro de conexão";
        }

        $query = "INSERT INTO papelaria2.fornecedor (
cnpj
nome_funcionario
telefone_funcionario
nome_empresa
telefone_empresa
)
VALUES ";

        $cnpj = $_POST["cnpj"];
        $nomeFuncionario = $_POST["nomeFuncionario"];
        $telefoneFuncionario = $_POST["telefoneFuncionario"];
        $nomeEmpresa = $_POST["nomeEmpresa"];
        $telefoneEmpresa = $_POST["telefoneEmpresa"];

        $query .= "(
            '$cnpj',
            '$nomeFuncionario',
            '$telefoneFuncionario',
            '$nomeEmpresa',
            '$telefoneEmpresa'     
        );";

        $conexao->query($query);

        echo "Novo fornecedor incluído com sucesso!!!";

        $conexao->close();
    }

    public function excluir() {
        
    }

    public function buscar($palavra) {
        
    }

}

?>
