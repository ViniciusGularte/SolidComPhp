<?php
namespace Solid\Html;

class AttributesTest extends \PHPUnit_Framework_TestCase
{
    public function testCriarAtributosHtmlParaTags()
    {
        $attributes = new Attributes([
            "class" => "btn btn-default",
            "data-modal" => "#login",
            "id" => "login"
            ]
        );

        $this->assertEquals(' class="btn btn-default" data-modal="#login" id="login"' , $attributes);
    }

}
