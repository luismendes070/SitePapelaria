<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <?php
        $nomeUsuario = $_POST['nomeUsuario'];
        $senha = $_POST['senha'];

        $conexao = mysql_connect("localhost", "root", "", "papelaria2");
        mysql_select_db("papelaria2");

        $resultado = mysql_query("SELECT * from funcionario where login = '$nomeUsuario'");

        $linhas = mysql_num_rows($resultado);

        if ($linhas == 0) {
            echo "<html>";

            echo "<head>";
            echo "</head>";

            echo "<body>";
            echo "<h2>Usuário não encontrado!</h2>";

            echo '<p>
                        <a href="http://localhost/SitePapelaria/index.html">Voltar
                      </p>';

            echo "</body>";
            echo "</html>";
        } else {

            if ($senha != mysql_result($resultado, 0, "senha")) {

                echo "<html>";

                echo "<head>";
                echo "</head>";

                echo "<body>";
                echo "<h2>A senha está incorreta!</h2>";

                echo '<p>
                                <a href="http://localhost/SitePapelaria/index.html">Voltar
                             </p>';

                echo "</body>";
                echo "</html>";
            } else {
                session_start(); // Inicia a sessão 
                $_SESSION['nomeUsuario'] = $nomeUsuario;
                $_SESSION['senha'] = $senha;

                header("Location: ./funcionarioAdministrador.php");
            }
        }

        mysql_close($conexao);
        ?>

    </body>
</html>
