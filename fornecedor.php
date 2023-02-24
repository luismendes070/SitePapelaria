<html>

    <head>
        <title> Fornecedor </title>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>

    <body>

        <div id="divTabelaFornecedor">
            <h2>Fornecedor<br></h2>

            <?php
            $conexao = new mysqli("localhost", "root", "", "papelaria2");

            if ($conexao->connect_errno) {
                echo "Erro de conexão";
            }

            $query = "SELECT * FROM fornecedor;";
            
            echo "<table> ";
            echo "<th>CNPJ</th>";
            echo "<th>Nome do funcionário</th>";
            echo "<th>Telefone do funcionário</th>";
            echo "<th>Nome da empresa</th>";
            echo "<th>Telefone da empresa</th>";

            if ($result = $conexao->query($query)) {

                while ($row = $result->fetch_array()) {

                    echo "<tr>";

                    echo "<td>";
                    printf(" %s", $row[0]);
                    echo "</td>";
                    echo "<td>";
                    printf(" %s", $row[1]);
                    echo "</td>";
                    echo "<td>";
                    printf(" %s", $row[2]);
                    echo "</td>";
                    echo "<td>";
                    printf(" %s", $row[3]);
                    echo "</td>";
                    echo "<td>";
                    printf(" %s", $row[4]);
                    echo "</td>";

                    echo "<tr>";
                }
            }
            echo "</table>";
            
            $conexao->close();
            ?>
            <form method="POST" action="./novoFornecedor.php">
                <p>
                    <input type="submit" value="Novo" name="botaoNovoFornecedor"></input>	
                </p>

            </form>

            <p><a href="http://localhost/SitePapelaria/index.php">Home</a></p>
        </div>

    </body>
</html>

