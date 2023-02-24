<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Papelaria Web II</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
        <link rel="icon" type="image/png" href="/imagens/favicon.png" />
    </head>
    <body>

    <div id = "tudo">


            <div id = "logomarcaCabecalho">
                <a href = "index.php"><img src = "imagens/papelaria.png"></a>
            </div>



            <div id = "divBusca">
                <form name="frmBusca" method="POST" action="paginas/buscaProduto.php"> 


                    <input type="text" name="palavra" />   
                    <input type="submit" value="Buscar"/>
            </div>

        <div id="divFazerLogin">
            <a href="paginas/fazerLogin.php">Login</a>
        </div>

        <div id="menu">
            <ul>
                <li><a href="http://localhost/SitePapelaria/index.php">Home</a></li>
                <li><a href="http://localhost/SitePapelaria/paginas/escolar.php">Escolar</a></li>
                <li><a href="http://localhost/SitePapelaria/paginas/informatica.php">Informática</a></li>
                <li><a href="paginas/contato.html">Contato</a></li>
            </ul>
        </div>        

        <div id="divMenuLateral">
            <?php
            
try { 

    // header('Content-type: text/plain; charset=utf-8');

// PHP PDO
            $conexao = new mysqli("localhost", "root", "", "papelaria2");

            if ($conexao->connect_errno) {
                echo "Erro de conexão";
            }

            $query = "SELECT nome FROM produto ORDER BY nome DESC;";

            echo "<div id = 'divLateral'>";
            echo "<h2>Produtos</h2>";
            echo "</div>";

            echo "<ul id='ulMenuLateral'>";
            if ($result = $conexao->query($query)) {

                while ($row = $result->fetch_array()) {

                    echo "produto em row[0]";
                    echo $row[0];

                    echo "<li>";
                    $nomeProduto = "<a href=http://localhost/SitePapelaria/paginas/" . geraLinkProduto($row[0])
                            . ".php>" . $row [0] . "</a>"; // Link do nome dos produtos no menu

                    echo $nomeProduto;
                    echo "</li>";
                }
            }
            echo "<ul>";

            $conexao->close();

}catch(Exception $e){

    echo "Products PHP Exception";

}finally{

}

            ?>
        </div>    

        <div id="principal">

            <?php
            
try {

            header('Content-type: text/plain; charset=utf-8');

            $conexao = new mysqli("localhost", "root", "", "papelaria2");

            if ($conexao->connect_errno) {
                echo "Erro de conexão";
            }

            $query = "SELECT * FROM produto ORDER BY nome";

            if ($result = $conexao->query($query)) {

                while ($row = $result->fetch_array()) {

                    echo '<p>';
                    echo '<a href="paginas/'
                    . $row[8] .
                    '.php">';
                    echo '<img src="imagens/produtos/' . $row[8] . '.jpg" width="180" height="180">';

                    echo $row[1];
                    echo '</p>';
                }
            }
            $conexao->close();

}catch(Exception $e){

echo "Products PHP Exception";

}
finally{

}

            ?>
        </div>
    </div>

        <?php

        try {

        header('Content-type: text/plain; charset=utf-8');

        $teste = "te sT�";

        /**
         * Essa fun��o recebe uma string com letras MAI�SCULAS e com
         * ACENTOS AGUDOS e transforma numa string com letras MIN�SCULAS e SEM ACENTOS AGUDOS
         * para criar um link para o produto passado por par�metro. 
         */
        function geraLinkProduto($teste) {

            $teste = strtolower($teste); //Transforma uma string em letras min�sculas
            // Sustitui todas as ocorr�ncias de uma string por outra
            $teste = str_replace(" ", "", $teste);
            $teste = str_replace("�", "a", $teste);
            $teste = str_replace("�", "e", $teste);
            $teste = str_replace("�", "i", $teste);
            $teste = str_replace("�", "o", $teste);
            $teste = str_replace("�", "�", $teste);

            return $teste;
        }

        }catch(Exception $e){

        }finally{

        }

//fim geraLinkProduto
//echo geraLinkProduto($teste);
        ?>

        
</body>
</html>
