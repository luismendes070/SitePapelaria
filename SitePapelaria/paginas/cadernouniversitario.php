<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <div id="divProdutoQualquer">

            <img src="http://localhost/SitePapelaria/imagens/produtos/cadernouniversitariocapadura.jpg" 
                 alt="Caderno universitário capa dura " width="180" height="180">

            <?php
            $conexao = new mysqli("localhost", "root", "", "papelaria2");

            if ($conexao->connect_errno) {
                echo "Erro de conex�o";
            }

            $palavra = "caderno universit�rio";
            $query = "SELECT * FROM produto WHERE nome LIKE '%" . $palavra . "%' ORDER BY nome";

            $codigoBarrasProduto;

            if ($result = $conexao->query($query)) {

                while ($row = $result->fetch_array()) {

                    echo "C�digo: ";
                    printf(" %s", $row[0]);
                    echo "<br>";

                    #$codigoBarrasProduto = $row[0];

                    echo "Descri��o: ";
                    printf(" %s", $row[1]);
                    echo "<br>";

                    echo "Marca: ";
                    printf(" %s", $row[6]);
                    echo "<br>";

                    echo "Pre�o: ";
                    printf(" %s", $row[7]);
                    echo "<br>";
                }
            }
            $conexao->close();
            echo "</table>";
            ?>
            <form method="POST" action="comprar.php">
                <input type="submit" value="comprar">
            </form>
        </div>

    </body>
</html>