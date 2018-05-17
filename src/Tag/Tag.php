<?php
namespace Solid\Html\Tag;
use Solid\Html\Attributes;

abstract class Tag implements TagsContract
{
    protected $attrs;
    protected $optional_attrs;

    public function __construct()
    {
        $this->attrs = func_get_args();
        $this->validate();
    }

    public function attributes(Attributes $attributes)
    {
        $this->optional_attrs = $attributes;
    }
}    
