<html>
    <head>
        <title></title>

        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <?php

        function cpfValido($cpfCliente) {
            $resp = FALSE;

            $conexao = new mysqli("localhost", "root", "", "papelaria2");

            if ($conexao->connect_errno) {
                echo "Erro de conexão";
            }

            $query = "SELECT * FROM cliente WHERE cpf like'" . $cpfCliente . "';";

            $contador = 0;
            
            if ($result = $conexao->query($query)) {

                while ($row = $result->fetch_array()) {
                    $contador++;
                }
            }

            if($contador == 1){
                $resp = TRUE;
            }

            return $resp;
        }

        $conexao = new mysqli("localhost", "root", "", "papelaria2");

        if ($conexao->connect_errno) {
            echo "Erro de conexão";
        }

        $cpfCliente = $_POST["cpfCliente"];

        if (cpfValido($cpfCliente)) {



            $query = "INSERT INTO papelaria2.venda (
codigoVenda ,
cpfCliente ,
quantidadeProduto ,
cpfFuncionario ,
codBarrasProduto ,
dataVenda)
	VALUES ";

            $codigoVenda = "";
            $quantidadeProduto = "";
            $cpfFuncionario = "";
            $codBarrasProduto = "";

            $dataVenda = "";

            $query .= "($codigoVenda ,$cpfCliente ,$quantidadeProduto ,
        $cpfFuncionario ,$codBarrasProduto ,$dataVenda);";


            try {

                $conexao->query($query);

                #$query = "DELETE FROM produto WHERE cod_barras =".$codBarrasProduto.";";
                #$conexao->query($query);

                echo "<h1>Nova compra realizada com sucesso!!!</h1>";
            } catch (Exception $exc) {

                echo $exc->getTraceAsString();
            }

            $conexao->close();
        } else {
            echo "<h1>CPF não cadastrado!</h1>";
            echo '<p><a href="http://localhost/SitePapelaria/paginas/cliente.php">Cadastrar Cliente</a></p>';
            echo '<a href="http://localhost/SitePapelaria/index.php">Home</a>';
        }
        ?>

        <p>
            <a href="http://localhost/SitePapelaria/index.php">Continuar</a>
        </p>
    </body>
</html>