<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>


        <form name="frmBusca" method="post"
              action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar">
            <input type="text" name="palavra" /> <input type="submit"
                                                        value="Buscar" />
        </form>   

        <?php
        // Conex�o com o banco de dados
        $conn = @mysql_connect("localhost", "root", "") or die("N�o foi poss�vel a conex�o com o Banco");
        // Selecionando banco
        $db = @mysql_select_db("papelaria2", $conn) or die("N�o foi poss�vel selecionar o Banco");
        // Recuperamos a a��o enviada pelo formul�rio
        $a = $_GET ['L�pis preto'];
        // Verificamos se a a��o � de busca
        if ($a == "buscar") {
            // Pegamos a palavra
            $palavra = trim($_POST ['palavra']);
            // Verificamos no banco de dados produtos equivalente a palavra digitada
            $sql = mysql_query("SELECT * FROM papelaria2.produto WHERE nome LIKE '%" . $palavra . "%' ORDER BY nome");
            // Descobrimos o total de registros encontrados
            $numRegistros = mysql_num_rows($sql);
            // Se houver pelo menos um registro, exibe-o
            if ($numRegistros != 0) {
                // Exibe os produtos e seus respectivos pre�os
                while ($produto = mysql_fetch_object($sql)) {
                    echo $produto->nome . " (R$ " . $produto->valor . ") <br />";
                }
                // Se n�o houver registros
            } else {
                echo "Nenhum produto foi encontrado com a palavra " . $palavra . "";
            }
        }
        ?>
    </body>
</html>