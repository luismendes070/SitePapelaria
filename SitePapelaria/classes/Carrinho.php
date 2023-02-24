<?php

require_once 'file:///c:/xampp/htdocs/SitePapelaria/classes/Produto.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carrinho
 *
 * @author Luís Mendes
 */
class Carrinho {

    private $produtos = array();
    private $desconto = 10;

    /* Adiciona um produto ao carrinho. */

    public function adicionaProduto(Produto $produto) {

        $this->produtos[] = $produto;
    }

    public function getProduto($idProduto) {

        foreach ($this->produtos as $p) {
            if ($p->codBarra == $idProduto) {
                return $p;
            }
        }
    }

    /* Remove um produto do carrinho. */

    public function removeProduto($idProduto) {

        for ($i = 0; $i < count($this->produtos); $i++) {
            if ($this->produtos[i]->getCodBarras == $idProduto) {
                unset($this->produtos[i]);
                break;
            }
        }
    }

    /* Lista os produtos do carrinho. */

    public function listarProdutos() {
        foreach ($this->produtos as $p) {
            $retorno . "
                
            Código de barras: $p->getCodBarras();
            Descrição: $descricao->getDescricao();
            Porcentagem: $porcentagem->getPorcentagem();
            Valor custo: $valorCusto->getValorCusto();
            Quantidade em estoque: $qtdeEstoque->getQtdeEstoque();
            Nome: $nome->getNome();
            Marca: $marca->getMarca();
            Preço de venda: $precoVenda->getPrecoVenda();
                ";
        }
        echo $retorno;
    }

    
    public function soma() {
        
        $retorno = 0.0;
        
        foreach ($this->produtos as $p) {
            $retorno += $p->getPrecoVenda();
        }
        echo $retorno;
    }
    
    public function getDesconto() {
        
        return soma()*(100 - $this->desconto);
    }

    


    
}

?>
