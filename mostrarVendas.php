<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>

    <body>
        <div id="divTabelaVendas">
            <?php
            $conexao = new mysqli("localhost", "root", "", "papelaria2");

            if ($conexao->connect_errno) {
                echo "Erro de conexão";
            }

            $query = "SELECT * FROM venda;";

            echo '<h1>Vendas</h1>';


            echo "<table>";
            echo "<th>Código</th>";
            echo "<th>cpfCliente</th>";
            echo "<th>Quantidade</th>";
            echo "<th>cpfFuncionario</th>";
            echo "<th>codBarras</th>";
            echo "<th>data</th>";


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

                    echo "<tr>";
                }
            }
            echo "</table>";



            $conexao->close();
            ?>

            <form method="POST" action="./venda.php">
                <p>
                    <input type="submit" value="Nova" name="botaoNovaVenda">	
                </p>

            </form>

            <p><a href="http://localhost/SitePapelaria/index.php">Home</a></p>

        </div>
    </body>
</html>