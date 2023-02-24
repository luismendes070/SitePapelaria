<?php
echo "<html>";

echo "<head>";
echo '<meta http-equiv="content-type" content="text/html" charset="ISO-8859-1"/>';
echo '<link rel="stylesheet" type="text/css" href="http://localhost/SitePapelaria/css/estilo.css">';
echo "</head>";

echo "<body>";
$conexao = new mysqli ( "localhost", "root", "", "papelaria" );

echo "Funcionários<br>";

$query = "SELECT * FROM funcionario;";

echo '<div id="divTabelaFuncionario">';
echo '<table> ';
echo "<th>CPF</th>";
echo "<th>Nome</th>";
echo "<th>Telefone</th>";
echo "<th>Login</th>";
echo "<th>Senha</th>";

if ($result = $conexao->query ( $query )) {
	
	while ( $row = $result->fetch_row () ) {
		
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
		
		echo "<tr>";
	}
}
echo "</table>";
echo '/div>';
echo "</body>";
echo "</html>";
?>
