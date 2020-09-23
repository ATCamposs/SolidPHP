<?php

namespace Andre\Solid\Connection;

interface DbInterface
{
    public function connect($servidor, $nome, $usuario, $senha);
}
