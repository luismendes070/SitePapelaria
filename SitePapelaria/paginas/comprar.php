<html>
    <head>
        <title>Compra</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <div id="divVenda">
            <form method = "POST" action = "insereCompra.php">

                <?php
                # = $_POST["$row[0]"];
                ?>

                <p>CPF do cliente
                    <input type="text" name="cpfCliente">
                </p>

                <input type = "submit" value = "Confimar">

                <p>
                    <a href="http://localhost/SitePapelaria/">Home</a>
                </p>

            </form>
        </div>
    </body>
</html>