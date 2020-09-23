<?php

namespace Andre\Solid;

//Diz que vai ser uma classe de testes do phpUnit
use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
    public function testCriaLinkComImagemAncora()
    {
        $html = new Html();
        $list = $html->ul('<li>André</li>');
        
        $this->assertEquals('<ul><li>André</li></ul>', $list);
    }
}
