<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade de Doação de Sangue</title>
</head>

<body>
  <h1>Análise de doador de Sangue</h1>
  <hr>
  <?php

  $idade = 70;
  $peso = 30;


  if ($idade >= 16 & $idade <= 69) {
    echo "Pode Doar";
  }else{
    echo "Você não tem idade para doar";
  }
  if ($peso >50) {
    echo "Você não está no peso ideal";
  }

  ?>
  <p><b>Idade 34 anos: </b> <?= $idade ?></p>
  <p><b>Peso 30: </b>  <?= $peso ?> </p>
  

 <!--  //ifs.......
  /**
   * Se idade >= 16 E idade <= 69
   *  if peso > 50
   *      pode doar
   *  se não
   *      não pode doar por conta do peso
   * senão
   *  não pode doar por conta da idade
   */ -->

  
</body>

</html>