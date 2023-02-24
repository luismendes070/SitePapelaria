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
require_once 'file:///c:/xampp/htdocs/SitePapelaria/bd/Bd.php';
require_once 'C:\xampp\htdocs\SitePapelaria\classes\Produto.php';

class BDProduto implements BD {

    function __construct() {
        
    }

    public function alterar() {
        
    }

    public function cadastrar() {
        $conexao = new mysqli("localhost", "root", "", "papelaria2");

        if ($conexao->connect_errno) {
            echo "Erro de conexão";
        }

        $query = "INSERT INTO papelaria2.produto (
cod_barras ,
descricao ,
porcentagem ,
qtde_estoque ,
nome ,
valor_custo ,
marca ,
preco_venda,
nome_imagem,
cnpj_fornecedor,
categoria
)
VALUES ";

        $cod_barras = $_POST["codigoBarras"];
        $descricao = $_POST["descricao"];
        $porcentagem = $_POST["porcentagem"];
        $qtde_estoque = $_POST["quantidadeEmEstoque"];
        $nome = $_POST["nome"];
        $valor_custo = $_POST["valorCusto"];
        $marca = $_POST["marca"];
        $preco_venda = $_POST["precoVenda"];
        $nome_imagem = $_POST["nomeImagem"];
        $cnpj_fornecedor = $_POST["cnpjFornecedor"];
        $categoria = $_POST["categoria"];

        $query .= "('$cod_barras' ,'$descricao' ,'$porcentagem' ,'$qtde_estoque' ,
        '$nome' ,'$valor_custo' ,'$marca' ,'$preco_venda','$nome_imagem','$cnpj_fornecedor','$categoria')";

        $conexao->query($query);

        echo "Novo produto inclu�do com sucesso!!!";

        $conexao->close();
    }

    public function excluir() {
        
    }

    /* Retorna array de produtos similares a uma palavra buscada */

    public function buscar($palavra) {

        $conexao = new mysqli("localhost", "root", "", "papelaria2");

        if ($conexao->connect_errno) {
            echo "Erro de conexão";
        }

        $query = "SELECT * FROM produto WHERE nome LIKE '%" . $palavra . "%' ORDER BY nome";


        $similares = array();

        if ($result = $conexao->query($query)) {

            while ($row = $result->fetch_array()) {

                $codBarras = $row[0];
                $descricao = $row[1];
                $porcentagem = $row[2];
                $qtdeEstoque = $row[3];
                $nome = $row[4];
                $valorCusto = $row[5];
                $marca = $row[6];
                $precoVenda = $row[7];
                $nomeImagem = $row[8];
                $cnpjFornecedor = $row[9];
                $categoria = $row[10];

                $produto = new Produto($codBarras, $descricao, $porcentagem, $qtdeEstoque,
                                $nome, $valorCusto, $marca, $precoVenda, $nomeImagem, $cnpjFornecedor, $categoria);

                $similares[] = $produto;
            }
        }


        return $similares;
    }

    public function getProduto($codBarras) {
        $conexao = new mysqli("localhost", "root", "", "papelaria2");

        if ($conexao->connect_errno) {
            echo "Erro de conexão";
        }

        $query = "SELECT * FROM produto where cod_barras = " . $codBarras;

        echo $query;

        if ($result = $conexao->query($query)) {

            while ($row = $result->fetch_array()) {

                $codBarras = $row[0];
                $descricao = $row[1];
                $porcentagem = $row[2];
                $qtdeEstoque = $row[3];
                $valorCusto = $row[4];
                $nome = $row[5];
                $marca = $row[6];
                $precoVenda = $row[7];
                $nomeImagem = $row[8];
                $cnpjFornecedor = $row[9];
                $categoria = $row[10];

                $produto = new Produto($codBarras, $descricao, $porcentagem, $qtdeEstoque,
                                $valorCusto, $nome, $marca, $precoVenda, $nomeImagem, $cnpjFornecedor, $categoria);
            }
        }


        return $produto;
    }

}

?>
