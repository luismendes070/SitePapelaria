<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>

        <?php
        $conexao = new mysqli("localhost", "root", "", "papelaria2");

        if ($conexao->connect_errno) {
            echo "Erro de conexão";
        }

        function buscaCPFCadastrado($cpf) {

            $resp = false;

            $conexao = new mysqli("localhost", "root", "", "papelaria2");

            if ($conexao->connect_errno) {
                echo "Erro de conexão";
            }

            $query = 'SELECT * FROM cliente WHERE cpf ="' . $cpf . '";';


            if ($result = $conexao->query($query)) {

                while ($row = $result->fetch_array()) {

                    if ($cpf == $row[0]) {
                        $resp = true;
                        return $resp;
                    }
                }
            } else {
                echo '<h1>Erro!<h1>';
            }

            $conexao->close();

            return $resp;
        }

#fim da função buscaCPFCadastrado

        $cpf = $_POST["cpf"];

        if (buscaCPFCadastrado($cpf)) {

            echo '<h1>Seu CPF já está cadastrado!<h1>';
        } else {
            $data_cadastro = $_POST["dataCadastro"];
            $data_nascimento = $_POST["dataNascimento"];
            $rg = $_POST["rg"];
            $telefone = $_POST["telefoneCliente"];
            $telefone_loja1 = $_POST["telefoneLoja1"];
            $telefone_loja2 = $_POST["telefoneLoja2"];
            $telefone_loja3 = $_POST["telefoneLoja3"];
            $endereco = $_POST["endereco"];
            $situacao = $_POST["situacao"];
            $nome_loja1 = $_POST["nomeLoja1"];
            $nome_loja2 = $_POST["nomeLoja2"];
            $nome_loja3 = $_POST["nomeLoja3"];
            $nome = $_POST["nome"];



            $query = "
        INSERT INTO 'papelaria2'.'cliente' 
        ('cpf', 
        'data_cadastro', 
        'data_nascimento', 
        'rg', 
        'telefone', 
        'telefone_loja1', 
        'telefone_loja2', 
        'telefone_loja3', 
        'endereco', 
        'situacao', 
        'nome_loja1', 
        'nome_loja2', 
        'nome_loja3', 
        'nome') VALUES (";


            $query .= "
        '$cpf', 
        '$data_cadastro',
        '$data_nascimento',
        '$rg',
        '$telefone',
        '$telefone_loja1',
        '$telefone_loja2',
        '$telefone_loja3',
        '$endereco',
        '$situacao',
        '$nome_loja1',
        '$nome_loja2',
        '$nome_loja3',
        '$nome'
";

            $query .= '");';


            if ($result = $conexao->query($query)) {

                echo '<h1>Agora você já é nosso cliente!<h1>';
            } else {
                echo '<h1>Erro!<h1>';
            }

            $conexao->close();
        }
        ?>

    </body>
</html>
