<html>
    <head>

        <title>Cadastro de funcionários</title>

        <meta http-equiv="content-type" content="text/html" charset="ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">

    </head>

    <body>

        <div id="divNovoCadastrado">
            <form method="POST" action="insereFuncionario.php">

            <h2>Cadastro de funcionários</h2>

            <p>CPF</p>
            <input type="text" name="cpf" size="11">

            <p>Nome</p>
            <input type="text" name="nome" size="50">

            <p>Telefone</p>
            <input type="text" name="telefone" size="10">

            <p>Login</p>
            <input type="text" name="login" size="10">

            <p>Senha</p>
            <input type="password" name="senha" size="10">

            <p>
                <input type="submit" value="Salvar"
                       name="botaoGravarBD">
            </p>
        </form>
        </div>

    </body>
</html>