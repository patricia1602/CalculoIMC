<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de IMC</title>
</head>
<body>
    <?php
    function classificarIMC($imc) // Declaração da função para classificar o IMC
    {
        // Array com as faixas de IMC e suas classificações
        $faixasIMC = [
            ["limite" => 18.5, "classificacao" => "Magreza"],
            ["limite" => 24.9, "classificacao" => "Saudável"],
            ["limite" => 29.9, "classificacao" => "Sobrepeso"],
            ["limite" => 34.9, "classificacao" => "Obesidade Grau I"],
            ["limite" => 39.9, "classificacao" => "Obesidade Grau II"],
            ["limite" => PHP_FLOAT_MAX, "classificacao" => "Obesidade Grau III"]
        ];
        // Percorre o array para encontrar a classificação correspondente
        foreach ($faixasIMC as $faixa) {
            if ($imc <= $faixa['limite']) {
                echo "Atenção, seu IMC é $imc, e você está classificado como {$faixa['classificacao']}.";
                return;
            }
        }
    }
    // Chamada da função com um valor de IMC
    classificarIMC(25.0);
    ?>
</body>
</html>