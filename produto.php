<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>

    <body>

        <form method="POST" action="./novoProduto.php">
            <div id="divTabelaProdutos">
                <?php
                $conexao = new mysqli("localhost", "root", "", "papelaria2");

                if ($conexao->connect_errno) {
                    echo "Erro de conexão";
                }

                $query = "SELECT * FROM produto;";

                echo '<h1>Produtos</h1>';

                echo '<div id="divProduto">';
                echo "<table> ";
                echo "<th>Cod_barras </th>";
                echo "<th>Descrição</th>";
                echo "<th>Porcentagem</th>";
                echo "<th>Qtde_estoque </th>";
                echo "<th>Nome</th>";
                echo "<th>Valor_custo</th>";
                echo "<th>Marca</th>";
                echo "<th>Preco venda</th>";

                // cod_barras descricao porcentagem qtde_estoque nome valor_custo marca preco_venda

                if ($result = $conexao->query($query)) {

                    while ($row = $result->fetch_array()) {

                        echo "<tr>";

                        echo "<td>";
                        printf(" %s", $row [0]);
                        echo "</td>";
                        echo "<td>";
                        printf(" %s", $row [1]);
                        echo "</td>";
                        echo "<td>";
                        printf(" %s", $row [2]);
                        echo "</td>";
                        echo "<td>";
                        printf(" %s", $row [3]);
                        echo "</td>";
                        echo "<td>";
                        printf(" %s", $row [4]);
                        echo "</td>";
                        echo "<td>";
                        printf(" %s", $row [5]);
                        echo "</td>";
                        echo "<td>";
                        printf(" %s", $row [6]);
                        echo "</td>";
                        echo "<td>";
                        printf(" %s", $row [7]);
                        echo "</td>";

                        echo "</tr>";
                    }
                }
                echo "</table>";
                echo '</div>';
                $conexao->close();
                ?>


                <input type="submit" value="Novo" name="botaoNovoProduto">
                </form>

                <p><a href="../index.php">Home</a></p>
            </div>


    </body>
</html>