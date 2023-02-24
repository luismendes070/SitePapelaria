<html>
    <head>
        <title></title>

        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <div id="principal">
            <?php
            $conexao = new mysqli("localhost", "root", "", "papelaria2");

            if ($conexao->connect_errno) {
                echo "Erro de conexão";
            }

            $query = "SELECT * FROM produto WHERE categoria like 'escolar' ORDER BY nome";

            if ($result = $conexao->query($query)) {

                while ($row = $result->fetch_array()) {

                    echo '<p>';
                    echo '<a href="'
                    . $row[8] .
                    '.php">';
                    echo '<img src="http://localhost/SitePapelaria/imagens/produtos/' . $row[8] . '.jpg" width="180" height="180">';

                    echo $row[1];
                    echo '</p>';
                }
            }
            $conexao->close();
            ?>
        </div>
    </body>
</html>