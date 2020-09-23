<?php

namespace Andre\Solid;

use Andre\Solid\Connection\Connection;
use Andre\Solid\Connection\Mysql;

require __DIR__ . '../../vendor/autoload.php';

$conn = new Connection('localhost', 'curso_solid', 'root', '1234');
$conn->connect(new Mysql());
