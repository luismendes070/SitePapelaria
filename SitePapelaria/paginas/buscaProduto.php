<html lang="pt-BR">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">
    </head>
    <body>



        <?php
        require_once 'file:///c:/xampp/htdocs/SitePapelaria/bd/BDProduto.php';

        function tiraAcentos($teste) {

        $teste = strtolower($teste);
        $teste = str_replace(" ", "", $teste);
        $teste = str_replace("�", "a", $teste);
        $teste = str_replace("�", "e", $teste);
        $teste = str_replace("�", "i", $teste);
        $teste = str_replace("�", "o", $teste);
        $teste = str_replace("�", "�", $teste);

        return $teste;
        }

        $palavra = $_POST['palavra'];
        $produto = new BDProduto();

        $resultado = $produto->buscar($palavra);

        foreach ($resultado as $i) {

        $imagem = $i->getNomeImagem();


        echo '

        <img src ="http://localhost/SitePapelaria/imagens/produtos/'.$imagem.'.jpg" alt="produto" width="180" height="180">

        ';



        echo "<br>";
        echo "Código: ";
        printf(" %s", $i->getCodBarras());
        echo "<br>";

        echo "Nome: ";
        printf(" %s", $i->getNome());
        echo "<br>";

        echo "Descrição: ";
        printf(" %s", $i->getDescricao());
        echo "<br>";

        echo "Marca: ";
        printf(" %s", $i->getMarca());
        echo "<br>";

        echo "Preço: ";
        printf(" %s", $i->getPrecoVenda());
        echo "<br>";
        }
        ?>

    </body>
</html>