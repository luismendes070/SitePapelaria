<html lang="pt-BR">
    <head>
        <title>Venda</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <div id="divVenda">
            <form method = "POST" action = "insereVenda.php">

                <h1>Venda</h1>
                
                <p>CPF do cliente
                    <?php
                    $conexao = new mysqli("localhost", "root", "", "papelaria2");

                    if ($conexao->connect_errno) {
                        echo "Erro de conex�o";
                    }

                    $query = "SELECT * FROM cliente;";
                    
                    echo '
                        <select name="cpfCliente">
                        ';
                    if ($result = $conexao->query($query)) {

                        while ($row = $result->fetch_array()) {

                            echo "<option value='".$row[0]."'>";
                            printf(" %s", $row[0]);
                            echo "</option>";
                        }
                        
                    }
                    echo "</select>";
                    $conexao->close();
                    ?>
                </p>

                <p>Quantidade de produto
                    <input type = "text" size = "11" name = "quantidadeProduto">
                </p>

                <p>Código de barras do produto
                    <?php
                    $conexao = new mysqli("localhost", "root", "", "papelaria2");

                    if ($conexao->connect_errno) {
                        echo "Erro de conexão";
                    }

                    $query = "SELECT * FROM produto;";
                    
                    echo '
                        <select name="codBarrasProduto">
                        ';
                    if ($result = $conexao->query($query)) {

                        while ($row = $result->fetch_array()) {

                            echo "<option value='".$row[0]."'>";
                            printf(" %s", $row[0]);
                            echo "</option>";
                        }
                        
                    }
                    echo "</select>";
                    $conexao->close();
                    ?>
                </p>

                <p>CPF do funcion�rio
                    <?php
                    $conexao = new mysqli("localhost", "root", "", "papelaria2");

                    if ($conexao->connect_errno) {
                        echo "Erro de conex�o";
                    }

                    $query = "SELECT * FROM funcionario;";
                    
                    echo '
                        <select name="cpfFuncionario">
                        ';
                    if ($result = $conexao->query($query)) {

                        while ($row = $result->fetch_array()) {

                            echo "<option value='".$row[0]."'>";
                            printf(" %s", $row[0]);
                            echo "</option>";
                        }
                        
                    }
                    echo "</select>";
                    $conexao->close();
                    ?>
                </p>

                <p>Data da venda
                    <input type = "text" size = "11" name = "dataVenda">
                </p>
                <input type = "submit" value = "Salvar">
                
                
                <p>
                    <a href="http://localhost/SitePapelaria/">Home</a>
                </p>
                    
            </form>
        </div>
    </body>
</html>