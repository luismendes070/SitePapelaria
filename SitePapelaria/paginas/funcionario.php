<html>

    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>

    <body>

        <div id="divTabelaFuncionario">
            <h2>Funcionários</h2>

            <?php
            $conexao = new mysqli("localhost", "root", "", "papelaria2");

            if ($conexao->connect_errno) {
                echo "Erro de conexão";
            }

            $query = "SELECT * FROM funcionario;";

            echo "<table>";
            echo "<th>CPF</th>";
            echo "<th>Nome</th>";
            echo "<th>Telefone</th>";
            echo "<th>Login</th>";
            echo "<th>Senha</th>";

            if ($result = $conexao->query($query)) {

                while ($row = $result->fetch_array()) {

                    echo "<tr>";

                    for ($cont = 0; $cont < mysqli_num_fields($result); $cont++) {
                        echo "<td>";
                        printf(" %s", $row[$cont]);
                        echo "</td>";
                    }
                    echo "<tr>";
                }
            }
            echo "</table>";


            $conexao->close();
            ?>

            <form method="POST" action="./novoFuncionario.php">
                <p>
                    <input type="submit" value="Novo" name="botaoNovoFuncionario"></input>	
                </p>

            </form>

            <p><a href="http://localhost/SitePapelaria/index.php">Home</a></p>
        </div>

    </body>
</html>
