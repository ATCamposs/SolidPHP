<?php

namespace Andre\Solid\Connection;

class Connection
{
    public function __construct($servidor, $nome, $usuario, $senha)
    {
        $this->servidor = $servidor;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public function connect(DbInterface $db)
    {
        $db->connect($this->servidor, $this->nome, $this->usuario, $this->senha);
    }
}
