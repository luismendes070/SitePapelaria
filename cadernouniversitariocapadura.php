<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <div id="divProdutoQualquer">


            <img src="http://localhost/SitePapelaria/imagens/produtos/cadernouniversitariocapadura.jpg" 
                 alt="Caderno universitário capa dura " width="180" height="180">

            <form method="GET" action="carrinho.php">
                <?php
                $conexao = new mysqli("localhost", "root", "", "papelaria2");

                if ($conexao->connect_errno) {
                    echo "Erro de conexão";
                }

                $palavra = "caderno universitário";
                $query = "SELECT * FROM produto WHERE nome LIKE '%" . $palavra . "%' ORDER BY nome";

                $codigoBarrasProduto = "123456";

                if ($result = $conexao->query($query)) {

                    while ($row = $result->fetch_array()) {

                        echo "Código: ";
                        printf(" %s", $row[0]);
                        $cod = $row[0];
                        echo "<br>";

                        $codigoBarrasProduto = $row[0];

                        echo "Descrição: ";
                        printf(" %s", $row[1]);
                        echo "<br>";

                        echo "Marca: ";
                        printf(" %s", $row[6]);
                        echo "<br>";

                        echo "Preço: ";
                        printf(" %s", $row[7]);
                        echo "<br>";
                    }
                }
                $conexao->close();
                echo "</table>";
                require_once 'file:///c:/xampp/htdocs/SitePapelaria/classes/Carrinho.php';
require_once 'file:///c:/xampp/htdocs/SitePapelaria/bd/BDProduto.php';
session_start();

$carrinho = new Carrinho();

$produto = new BDProduto();

$carrinho->adicionaProduto($produto->getProduto($cod));

$_SESSION["carrinho"] = $carrinho;

echo "Total: ".$_SESSION['carrinho']->soma();

echo "Com 10% de desconto: ".$_SESSION['carrinho']->getDesconto();
                ?>



            </form>

            <form method="POST" action="comprar.php">
                <input type="submit" value="comprar">
            </form>

        </div>

    </body>
</html>