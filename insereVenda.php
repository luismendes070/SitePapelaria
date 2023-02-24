<html>
    <head>
        <title></title>

        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <?php
        $conexao = new mysqli("localhost", "root", "", "papelaria2");

        if ($conexao->connect_errno) {
            echo "Erro de conexão";
        }

        $query = "INSERT INTO papelaria2.venda (
codigoVenda ,
cpfCliente ,
quantidadeProduto ,
cpfFuncionario ,
codBarrasProduto ,
dataVenda)
	VALUES ";

        $codigoVenda = "NULL";
        $cpfCliente = $_POST["cpfCliente"];
        $quantidadeProduto = $_POST["quantidadeProduto"];
        $cpfFuncionario = $_POST["cpfFuncionario"];
        $codBarrasProduto = $_POST["codBarrasProduto"];

        $dataVenda = $_POST["dataVenda"];

        $query .= "($codigoVenda ,$cpfCliente ,$quantidadeProduto ,
        $cpfFuncionario ,$codBarrasProduto ,$dataVenda);";

        echo $query;

        try {

            $conexao->query($query);

            $query = "DELETE FROM produto WHERE cod_barras =" . $codBarrasProduto . ";";
            $conexao->query($query);
            echo "<h1>Nova venda incluído(a) com sucesso!!!</h1>";
        } catch (Exception $exc) {

            echo $exc->getTraceAsString();
        }

        $conexao->close();
        ?>
        <p>
            <a href="http://localhost/SitePapelaria/paginas/mostrarVendas.php">Mostrar vendas</a>
        </p>

        <p>
            <a href="venda.php">Continuar</a>
        </p>

    </body>
</html>