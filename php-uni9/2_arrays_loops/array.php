<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	// array sequencial
	$lista_compras = array('Ovos', 'Bananas', 'Leite', 'Chocolate');
	$list = ['Frutas', 'Pão', 'Arroz', 3, 1.5];

	echo '<pre>';
	var_dump($lista_compras);
	echo '</pre>';

	echo "<hr>";

	echo '<pre>';
	var_dump($list);
	echo '</pre>';

	echo "<hr>";

	echo '<pre>';
	var_dump($list[2]);
	echo '</pre>';

	// paramos aqui ... falta "array associativo"
	?>
</body>

</html>