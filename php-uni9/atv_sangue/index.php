<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="index.css" rel="stylesheet">
  <title>Atividade de Doação de Sangue</title>
</head>

<body>
  <h1 class="h1">Análise de doador de Sangue</h1>
  <hr>
  <div class="container">
    <h3>Os Pré requisitos para doar sangue.</h3>
    <ul>
      <li class="li">O usuário deve ter entre 16 e 69 anos.</li>
      <li class="li">O usuário deve pesar mais de 50 Kg</li>
    </ul>
    <br>
    <?php
    $idade = 12;
    $peso = 65;
    $resultado = false;

    if ($idade >= 16 & $idade <= 69) {
      echo "Você tem $idade anos, atende os PRÉ REQUISITOS, para ser um doador";
    } else {
      echo "Você tem $idade anos, NÃO atende os pré-requisitos para ser um doar. Desculpe...";
    }
    echo "<br>";
    if ($peso > 50) {
      echo "Você tem $peso kg, atende os PRÉ REQUISITOS, para ser um doador.";
    } else {
      echo "Você tem $peso kg, NÃO atende os pré-requisitos para ser um doador. Desculpe...";
    }
    ?>
    <br>
    <p class="li">Resultado da Análise:
      <br>
      <?= $resultado
        ? 'SIM! Você atendeu todos os pré-requisitos para ser um doadorr.'
        :  'NÃO! Infelizmente você NÃO tem todos os pré-requisito para ser um doador.'
      ?>
    </p>
  </div>
</body>

</html>