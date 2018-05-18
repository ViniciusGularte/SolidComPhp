<?php
namespace Solid\Html;

class Html
{
    public function __call(string $name, $arguments)
    {
        return $this->createTags($name, $arguments);
    }

    public function createTags(string $name , $arguments)
    {
        $class = 'Solid\Html\Tag\\' . ucfirst($name);

        $reflection = new \ReflectionClass($class);
        return $reflection->newInstanceArgs($arguments);
    }
}
