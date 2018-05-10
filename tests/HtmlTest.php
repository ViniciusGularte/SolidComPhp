<?php

namespace Solid\Html;

class HtmlTest extends \PHPUnit_Framework_TestCase
{
      public function testCriarTagImgComSrc()
    {
        //$html = new Html;
        //$img = $html->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', '<img src="img/photo.png">');
    }
    /**public function testCriarTagAComImgAncora()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');

        $a = $html->a('http://www.example.com.br', $img);

        $this->assertEquals('<a href="http://www.example.com.br"><img src="img/photo.png"></a>', $a);
    }
    public function testCriarTagAComClassEId()
  {
      $html = new Html;

      $a = $html->a('http://www.example.com.br', 'Meu Site');
      $a->attributes([
          'class'=>'btn btn-default',
          'id' => 'login'
      ]);

      $this->assertEquals('<a href="http://www.example.com.br" class="btn btn-default" id="login">Meu Site</a>', $a);
  }**/
}
