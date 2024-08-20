<?php


class Calc{
    private $valor1;
    private $valor2;
    private $resultado;

    public function somar($valor1,$valor2){
        $resultado=$valor1+$valor2;
        return $resultado;

    }
    public function subtrair($valor1,$valor2){
        $resultado=$valor1-$valor2;
        return $resultado;

    }
    public function multiplicar($valor1,$valor2){
        $resultado=$valor1*$valor2;
        return $resultado;

    }
    public function dividir($valor1,$valor2){
        $resultado=$valor1/$valor2;
        return $resultado;

    }
}

?>