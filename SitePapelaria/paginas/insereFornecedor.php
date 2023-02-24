<html>
    <head>
        <title></title>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <?php
        require_once 'file:///c:/xampp/htdocs/SitePapelaria/bd/BDFornecedor.php';
        $bdFornecedor = new BDFornecedor();
        $bdFornecedor->cadastrar();
        ?>

        <p>
            <a href="fornecedor.php">Continuar</a>
        </p>


    </body>
</html>
