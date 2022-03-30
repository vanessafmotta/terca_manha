<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./atv-sangue.css">
  <title>Atividade de Doação de Sangue</title>
</head>

<body>
  <h1 class="h1">Análise de doador de Sangue</h1>
  <hr>
  <div class="login-box">
    <div class="requisitos">
      <h2>O usuário deve ter entre 16 e 69 anos edeve pesar mais de 50 Kg.</h2>
    </div>
    <div>
      <form method="post" action="atv-sangue.php" class="form">
        <div class="user-box">
          <label>Informe sua idade:</label>
          <input type="number" step=0.01 name="idade" required class="feedback-input" placeholder="Idade">
        </div>
        <div class="user-box">
          <label>Informe seu peso:</label>
          <input type="number" step=0.01 name="peso" required class="feedback-input" placeholder="Peso">
        </div>
        <br><br>
        <input type="submit" value="Resultado">
    </div>
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $idade = $_POST["idade"];
      $peso = $_POST["peso"];

      if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
        echo "<p> <b>RESULTADO: SIM!</b><br>Você atendeu todos os pré-requisitos para ser um doador.</p>";
      } else {
        echo "<p> <b>RESULTADO: NÃO!</b><br> Infelizmente você não tem todos os pré-requisito para ser um doador.</p>";
      }
    }
    ?>
    </p>
  </div>
</body>

</html>