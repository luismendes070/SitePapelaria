<html>
    <head>
        <title></title>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <?php
        require_once 'file:///c:/xampp/htdocs/SitePapelaria/bd/BDProduto.php';
        $bdProduto = new BDProduto();
        $bdProduto->cadastrar();
        ?>

        <p>
            <a href="produto.php">Continuar</a>
        </p>


    </body>
</html>