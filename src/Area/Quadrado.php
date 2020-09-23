<?php

namespace Andre\Solid\Area;

class Quadrado extends Retangulo
{
    public function area()
    {
        return $this->largura * $this->largura;
    }
}
