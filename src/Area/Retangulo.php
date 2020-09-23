<?php

namespace Andre\Solid\Area;

class Retangulo
{
    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function area()
    {
        return $this->largura * $this->altura;
    }
}
