<?php
namespace Solid\Html\Tag;

abstract class Tag implements TagsContract
{
    protected $attrs;

    public function __construct()
    {
        $this->attrs = func_get_args();
        $this->validate();
    }
}
