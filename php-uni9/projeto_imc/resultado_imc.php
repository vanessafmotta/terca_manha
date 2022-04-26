<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Resultados</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $valor_imc = calculaIMC($peso, $altura);

    function calculaIMC($peso, $altura)
    {
        $imc = $peso / ($altura * $altura);
        return $imc;
    }

    function classificaIMC($imc)
    {
        $classificacao = "";
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            return "Peso normal";
        } elseif ($imc >= 25 && $imc <= 29.9) {
            return "Sobrepeso";
        } elseif ($imc >= 30 && $imc <= 34.9) {
            return "Obesidade grau I";
        } elseif ($imc >= 35 && $imc <= 39.9) {
            return "Obesidade grau II";
        } else {
            return "Obesidade grau III";
        }

        return $classificacao;
    }

    ?>
    <div class="cabecalho">
        <p>Calculadora IMC - Resultados</p>
        <hr>
    </div>

    <div class="resultados">
        <p><b>Peso informado: </b><?= $peso ?>Kg</p>
        <p><b>Altura informada: </b><?= number_format($altura, 2, ',') ?>m</p>
        <hr>
        <p><b>IMC: </b><?= number_format($valor_imc, 2, ',') ?></p>
        <!-- Alternativa:
        <p><b>IMC: </b><?php printf('%.2f', $valor_imc); ?></p> -->
        <p><b>Classificação: </b> <?= classificaIMC($valor_imc) ?> </p>
        <form>
            <input class="bt-voltar" type="button" value="Calcular novamente" onClick="JavaScript: window.history.back();">
        </form>
    </div>

</body>

</html>