<html>
    <head>
        <title>Administrador</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <div id="divTopo">
            <p>Administrador</p>
        </div>	

        <div id="divUsuarioLogado">
            <?php
            session_start();
            echo $_SESSION['nomeUsuario'];
            ?>

            <a href="sessao.php">Sessão</a>

        </div>

        <div id="divAdministrador">

            <p><a href="./funcionario.php">Funcionários</a></p>
            <p><a href="./fornecedor.php">Fornecedores</a></p>
            <p><a href="./produto.php">Produtos</a></p>
            <p><a href="./mostrarClientes.php">Clientes</a></p>
            <p><a href="./venda.php">Vender</a></p>
            <p><a href="./mostrarVendas.php">Mostrar vendas</a></p>
            <p><a href="http://localhost/SitePapelaria/index.php">Home</a></p>

        </div>



    </body>
</html>
