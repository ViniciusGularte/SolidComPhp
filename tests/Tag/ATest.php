<?php
namespace Solid\Html\Tag;

class ATest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagAComHrefEAncora()
    {
        $a = new A('http://www.example.com.br', 'meu site');

        $this->assertEquals('<a href="http://www.example.com.br">meu site</a>', $a);
    }
}
