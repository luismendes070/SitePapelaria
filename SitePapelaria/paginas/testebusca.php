<html>
<head>
    <title></title>
</head>
<body>

<form action="" method="post">
    Busca: <input type="text" name="busca" />
    
    <input type="submit" />
    <input type="reset" />
</form>

<?php
// inclui arquivo de conexão com o banco
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // query de consulta
    $sql = "SELECT * FROM `produto` WHERE `nome_produto` LIKE '".$_POST['busca']."%' GROUP BY id ASC";
            
    // executa a query no banco de dados
    $executar = mysql_query($sql);
               
    // conta o total de resultados encontrados
    $total = mysql_num_rows($executar);
    
    // mensagem se o resultado for vazio
    if (empty($_POST['busca'])) 
    {
        echo "Digite uma palavra-chave para sua busca";
    }
    else // define valores se o resultado não for vazio
    {
        echo "Sua busca por ".$_POST['busca']." retornou ".$total." resultado(s)<br>";
        $total = 0;
        // gera o loop com os resultados
        while ($linha = mysql_fetch_array($executar)) 
        {
            echo "Código do Produto: ".$linha['id']."<br>";
            echo "Produto: ".$linha['nome_produto']."<br>";
            echo "Quantidade em estoque: ".$linha['quantidade']."<br>";
            echo "-----------------------------------------------------<br>";
            $total = $total + $linha['quantidade'];
        }    
        echo "Quantidade total de produtos relacionados à palavra-chave ".$_POST['busca'].": ".$total;
    }        
}
?>

</body>
</html>