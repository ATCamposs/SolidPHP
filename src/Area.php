<?php

namespace Andre\Solid;

use Andre\Solid\Area\ImprimeResultados;
use Andre\Solid\Area\Quadrado;

require __DIR__ . '../../vendor/autoload.php';

$imprime_resultado = new ImprimeResultados();
$imprime_resultado->imprime(new Quadrado(5, 10));
