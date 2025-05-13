<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/indexphp.css">
    <title>Resultado</title>
</head>
<body>
    
</body>
</html>


<?php
/*estrutura basica php "<?php?>"*/

//declarando variáveis

$nome = $_POST["nome"];
$idade = $_POST["idade"];

//Fazendo a verificação da idade

if ($idade >= 18) {
    echo "$nome <br> Você é maior de idade";
} else if ($idade < 18 && $idade > 0) {
    echo "$nome <br> Você é menor de idade";
} else {
    echo "Idade inválida";
}

?>