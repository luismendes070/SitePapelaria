<html>
    <head>

        <title>Cadastro de fornecedor</title>

        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">

    </head>

    <body>

        <div id="divTabelaFornecedor">
            <form method="POST" action="insereFornecedor.php">

                <h2>Cadastro de fornecedor</h2>

                <p>CNPJ</p>
                <input type="text" name="cnpj" size="11">

                <p>Nome funcionário</p>
                <input type="text" name="nomeFuncionario" size="50">

                <p>Telefone funcionário</p>
                <input type="text" name="telefoneFuncionario" size="10">

                <p>Nome empresa</p>
                <input type="text" name="nomeEmpresa" size="10">

                <p>Telefone empresa</p>
                <input type="text" name="telefoneEmpresa" size="10">

                <p>
                    <input type="submit" value="Salvar"
                           name="botaoGravarBD">
                </p>
            </form>
        </div>

    </body>
</html>
