<?php
require_once 'file:///c:/xampp/htdocs/SitePapelaria/classes/Carrinho.php';
require_once 'file:///c:/xampp/htdocs/SitePapelaria/bd/BDProduto.php';
session_start();

$carrinho = new Carrinho();

$produto = new BDProduto();

echo $produto->getProduto($_GET["cod"]);

$carrinho->adicionaProduto(produto);

$_SESSION["carrinho"] = $carrinho;

echo "Total: ".$_SESSION['carrinho']->soma();

echo "Com 10% de desconto: ".$_SESSION['carrinho']->getDesconto();
?>
