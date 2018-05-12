<?php
namespace Solid\Html\Tag;

class ImgTest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComSrc()
    {
        $img = new Img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }
}
