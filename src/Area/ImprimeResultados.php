<?php

namespace Andre\Solid\Area;

class ImprimeResultados
{
    public function imprime(Retangulo $retangulo)
    {
        echo $retangulo->area();
    }
}
