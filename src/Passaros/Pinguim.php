<?php

namespace Andre\Solid\Passaros;

class Pinguin implements InterfacePassaro
{
    public function voa()
    {
        throw new \Exception('Não use este método');
    }

    public function anda()
    {
        //
    }

    public function nada()
    {
        //
    }
}
