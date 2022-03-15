<!DOCTYPE html>
<html lang='pt-br'>

<head>
	<meta charset='UTF-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Hello World</title>
</head>

<body>
	<!-- isso é um comentário -->
	<h1>Minha primeira página php</h1>
	<hr>
	<br>
	<?php
	//comentário np php em linha 
	/* comentário em bloco */

	// isso é uma variável
	$nome = 'Vanessa F. Mota';

	//variável de valor inteiro

	$idade = 30;

	// variável do tipo flutuante(real)

	$altura = 1.83;

	// variável boolena(verdadeira ou falsa)

	$fumante = false;

	// isso é uma variável textual

	$time = 'Palmeiras';

	?>
	<h2>Dados do usuário</h2>
	<br>
	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Time que torce: <?= $time ?></p>
	<p>Altura: <?= $altura ?></p>
	<?php
	//  if($fumante){
	// echo('<p>Fuma ? Sim !</p>');
	// }else{
	// echo('<p>Fuma ? Não !</p>');
	// } 
	?>
	<p> Fuma? <?= $fumante ? 'Sim' : 'Não' ?></p>
</body>

</html>