<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>


<form action="" method="post">
    <label for="numero1">Numero 1:</label>
    <input type="text" name="numero1" required>
    <br><br>
    <label for="numero2">Numero 2:</label>
    <input type="text" name="numero2" required>
    <label for="operacao">Operação:</label>
    <select name="operacao" id="operacao">
    <option value="somar">Somar</option>
    <option value="subtrair">Subtrair</option>
    <option value="multiplicar">Multiplicar</option>
    <option value="dividir">Dividir</option>
    </select>
    <input type="submit" value="Calcular">

</form>
    
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    require 'Calc.php';
    //vamos pegar o valor usando o name
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];
    $total=0;

    //criando o noso objeto "$calc" chamando a sua classe
    $calc = new Calc();
    //vamos pegar a operação pelo value dela.
    if ($operacao=="somar") {
        $total=$calc->somar($numero1,$numero2);
    }
    elseif ($operacao=="subtrair") {
        $total=$calc->subtrair($numero1,$numero2);
    }
    elseif ($operacao=="multiplicar") {
        $total=$calc->multiplicar($numero1,$numero2);
    }
    else  {
        $total=$calc->dividir($numero1,$numero2);
    }
    echo"<h2>Resultado: $total</h2>";
}


?>