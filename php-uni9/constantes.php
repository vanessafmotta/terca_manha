<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Contantes</title>
</head>

<body>
  <?php
  // constantes, ou seja, não pode ser alterada
  define('DB_URL', 'url_do_banco_de_dados');
  define('DB_USUARIO', 'root');
  define('DB_PASS', 'Senha123');

  echo DB_URL . '<br>';
  echo DB_USUARIO . '<br>';
  echo DB_PASS . '<br>';

  //define ('DB_URL', 'localhost'); // não é possível alterar const
  ?>
</body>

</html>