<?php
namespace Solid\Html;

class Tags
{
    public function img(string $src)
    {
        return '<img src="' . $src . '">';
    }

    public function a(string $href , string $anchor)
    {
        return '<a href="' . $href . '">' . $anchor . '</a>';
    }
}
