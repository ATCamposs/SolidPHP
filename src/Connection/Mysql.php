<?php

namespace Andre\Solid\Connection;

class Mysql implements DbInterface
{
    public function connect($servidor, $nome, $usuario, $senha)
    {
        echo 'conecta com mysql';
    }
}
