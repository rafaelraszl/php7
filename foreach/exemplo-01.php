<?php 

$meses = array(
	"Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {

	echo "<br>";
	echo "<hr>";
	
	echo "Indice: " . $index . "<br>";
	echo "O mês é: " . $mes;

	echo "<br>";
}

 ?>