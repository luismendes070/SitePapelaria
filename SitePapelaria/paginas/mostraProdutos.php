<html>

<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./estilo.css">
</head>

<body>
	<?php
	$conexao = new mysqli ( "localhost", "root", "", "papelaria2" );
	
	if ($conexao->connect_errno) {
		echo "Erro de conex�o";
	}
	
	$query = "SELECT * FROM produto;";
	
	echo "$query";
	
        echo '<div id="divTabelaProdutos">';
	echo "<table> ";
	echo "<th>cod_barras </th>";
	echo "<th>descricao</th>";
	echo "<th>porcentagem</th>";
	echo "<th>qtde_estoque </th>";
	echo "<th>nome</th>";
	echo "<th>valor_custo</th>";
	echo "<th>marca</th>";
	echo "<th>preco_venda</th>";
	
	// cod_barras descricao porcentagem qtde_estoque nome valor_custo marca preco_venda
	
	if ($result = $conexao->query ( $query )) {
		
		while ( $row = $result->fetch_array () ) {
			
			echo "<tr>";
			
			echo "<td>";
			printf ( " %s", $row [0] );
			echo "</td>";
			echo "<td>";
			printf ( " %s", $row [1] );
			echo "</td>";
			echo "<td>";
			printf ( " %s", $row [2] );
			echo "</td>";
			echo "<td>";
			printf ( " %s", $row [3] );
			echo "</td>";
			echo "<td>";
			printf ( " %s", $row [4] );
			echo "</td>";
			echo "<td>";
			printf ( " %s", $row [5] );
			echo "</td>";
			echo "<td>";
			printf ( " %s", $row [6] );
			echo "</td>";
			echo "<td>";
			printf ( " %s", $row [7] );
			echo "</td>";
			
			echo "<tr>";
		}
	}
	echo "</table>";
        echo '</div>';
	
	$conexao->close ();
	
	?>
	
	
</body>
</html>