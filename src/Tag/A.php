<?php

namespace Andre\Solid\Tag;

class A
{
    public function render(string $href, string $anchor)
    {
        return '<a href="' . $href . '">' . $anchor . '</a>';
    }
}
