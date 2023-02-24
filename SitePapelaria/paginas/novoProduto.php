<html>
    <head>

        <title>Cadastro de produtos</title>

        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">

    </head>

    <body>

        <div id="divNovoCadastrado">

            <form method="POST" action="insereProduto.php">

                <p>Código de barras</p>
                <input type="text" name="codigoBarras" size="13">

                <p>Descrição</p>
                <input type="text" name="descricao" size="11">
                
                <p>Porcentagem</p>
                <input type="text" name="porcentagem" size="11">

                <p>Quantidade em estoque</p>
                <input type="text" name="quantidadeEmEstoque" size="11">

                <p>Nome</p>
                <input type="text" name="nome" size="50">

                <p>Valor custo</p>
                <input type="text" name="valorCusto" size="10">

                <p>Marca</p>
                <input type="text" name="marca" size="10">

                <p>Preço venda</p>
                <input type="text" name="precoVenda" size="10">

                <p>Nome da imagem</p>
                <input type="text" name="nomeImagem" size="10">
                
                <p>CNPJ fornecedor</p>
                <input type="text" name="cnpjFornecedor" size="10">
                
                <p>Categoria</p>
                <input type="text" name="categoria" size="10">
                
                <p>
                    <input type="submit" value="Salvar"
                           name="botaoSalvar">
                </p>
            </form>

        </div>

    </body>
</html>