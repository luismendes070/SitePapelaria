<html>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    <body>

        <?php
        $conexao = new mysqli("localhost", "root", "", "papelaria2");

        if ($conexao->connect_errno) {
            echo "Erro de conexão";
        }

        $query = "SELECT * FROM cliente;";

        echo '<h1>Clientes</h1>';

        echo '<div id="divTabelaClientes">';

        echo "<table>";
        echo "<th>CPF</th>";
        echo "<th>Data Cad.</th>";
        echo "<th>Data Nasc.</th>";
        echo "<th>RG</th>";
        echo "<th>Telefone</th>";
        echo "<th>Telefone loja 1</th>";
        echo "<th>Telefone loja 2</th>";
        echo "<th>Telefone loja 3</th>";
        echo "<th>Endereço</th>";
        echo "<th>Situação</th>";
        echo "<th>Nome loja 1</th>";
        echo "<th>Nome loja 2</th>";
        echo "<th>Nome loja 3</th>";
        echo "<th>Nome do cliente</th>";

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
                echo "<td>";
                printf(" %s", $row [8]);
                echo "</td>";

                if ($row[9] == "true") {
                    echo "<td>";
                    echo 'em dias';
                    echo "</td>";
                } else {
                    echo "<td>";
                    echo 'bloqueado';
                    echo "</td>";
                }

                echo "<td>";
                printf(" %s", $row [10]);
                echo "</td>";
                echo "<td>";
                printf(" %s", $row [11]);
                echo "</td>";
                echo "<td>";
                printf(" %s", $row [12]);
                echo "</td>";
                echo "<td>";
                printf(" %s", $row [13]);
                echo "</td>";

                echo "<tr>";
            }
        }
        echo "</table>";

        $conexao->close();
        ?>
        <form method="POST" action="cliente.php">
            <input type="submit" name="novoCliente" value="novo">
        </form>
    </body>
</html>