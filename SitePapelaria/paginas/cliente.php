<html lang="pt-BR">

    <head>
        <title>Cadastro Cliente</title>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>

    <body>

        <div id="divCadastroCliente">
            <form method="POST" action="cadastroCliente.php">
                <h1>Você será o nosso mais novo cliente em breve!</h1>

                <h2>Cliente</h2>

                <p>
                    CPF<input type="text" name="cpf" size="11">
                </p>
                <p>
                    Data de cadastro
                </p>
                <p>
                    <input type="text" name="dataCadastro" size="11"></p>
                <p>
                    Data de nascimento
                </p>
                <p>
                    <input type="text" name="dataNascimento" size="11">
                </p>
                <p>
                    RG
                </p>
                <p>
                    <input type="text" name="rg" size="11">
                </p>


                <p>
                    Tel. do cliente
                </p>
                <p>
                    <input type="text" name="telefoneCliente" size="11">
                </p>
                <p>
                    Tel. loja 1
                </p>
                <p>
                    <input type="text" name="telefoneLoja1" size="11">
                </p>
                <p>
                    Tel. loja 2
                </p>
                <p>
                    <input type="text" name="telefoneLoja2" size="11">
                </p>
                <p>
                    Tel. loja 3
                </p>
                <p>
                    <input type="text" name="telefoneLoja3" size="11">
                </p>

                <p>
                    Endereço
                </p>
                <p>
                    <input type="text" name="endereco" size="11">
                </p>    
                <p>Situação
                    <select name="situacao">
                        <option value="true">Em dias</option>
                        <option value="false">Bloqueado</option>
                    </select> 
                </p>

                <p>
                    Nome loja 1
                </p>
                <p>
                    <input type="text" name="nomeLoja1" size="11">
                </p>
                <p>
                    Nome loja 2
                </p>
                <p>
                    <input type="text" name="nomeLoja2" size="11">
                </p>
                <p>
                    Nome loja 3
                </p>
                <p>
                    <input type="text" name="nomeLoja3" size="11">
                </p>

                <p>
                    <input type="submit" value="continuar">
                </p>
                
                <p>
                    <a href="http://localhost/SitePapelaria/index.php">Home</a>
                </p>
            </form>
        </div>

    </body>
</html>