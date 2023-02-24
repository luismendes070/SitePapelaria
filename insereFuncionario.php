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

        $query = "INSERT INTO `papelaria2`.`funcionario` (
		`cpf` ,
		`nome` ,
		`telefone` ,
		`login` ,
		`senha`
	)
	VALUES ";

        $cpf = $_POST ["cpf"];
        $nome = $_POST ["nome"];
        ;
        $telefone = $_POST ["telefone"];
        $login = $_POST ["login"];
        $senha = $_POST ["senha"];

        $query .= "('$cpf','$nome','$telefone','$login','$senha')";

        $conexao->query($query);

        echo "Novo(a) funcionário(a) incluído(a) com sucesso!!!";

        $conexao->close();
        ?>

        <p>
            <a href="funcionario.php">Continuar</a>
        </p>
    </body>
</html>