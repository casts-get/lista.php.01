<?php

// (x² + y²) / (x + y)

function calcularFormula($x, $y)
{
    if (( $x + $y)== 0){
        return "não é possivel realizar a divisão por zero.";

    }

    $resultado = (pow($x, 2) + pow($y, 2)) / ($x + $y);

    return $resultado;
}

$x = 10;
$y = 5;

echo "valor de x: $x <br>";
echo "valor de y: $y <br><br>";
echo "resultado: " . calcularFormula($x, $y);
?>
