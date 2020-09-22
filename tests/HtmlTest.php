<?php

namespace Andre\Solid;
//Diz que vai ser uma classe de testes do phpUnit
use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
    public function testFirstExample()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');
        
        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }
}