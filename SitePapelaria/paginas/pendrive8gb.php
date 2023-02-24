<html lang="pt-BR">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <form method="GET" action="comprar.php">
            <div id="divProdutoQualquer">
                
            <img src="http://localhost/SitePapelaria/imagens/produtos/pendrive8gb.jpg" alt="Pen drive 8 GB" width="180" height="180">

                <?php
                $conexao = new mysqli("localhost", "root", "", "papelaria2");

                if ($conexao->connect_errno) {
                    echo "Erro de conexão";
                }

                $palavra = "drive";
                $query = "SELECT * FROM produto WHERE nome LIKE '%" . $palavra . "%' ORDER BY nome";

                $codigoBarrasProduto;

                if ($result = $conexao->query($query)) {

                    while ($row = $result->fetch_array()) {

                        echo "Código: ";
                        printf(" %s", $row[0]);
                        echo "<br>";

                        #$codigoBarrasProduto = $row[0];

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
                ?>

                <input type="submit" value="comprar">
                </form>
            </div>
    </body>
</html>
