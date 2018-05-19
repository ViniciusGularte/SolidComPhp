<?php
namespace Solid\Html\Tag;
use Solid\Html\AttributesContract;

abstract class Tag implements TagsContract
{
    protected $attrs;
    protected $optional_attrs;
    protected $attributesClass;

    public function __construct(AttributesContract $attributes)
    {
        $this->attrs = func_get_args();
        foreach ($this->attrs as $key => &$value) {
            if (is_a($value, 'Solid\Html\Tag\TagsContract')) {
                $value = (string)$value;
            }
            if (is_a($value, 'Solid\Html\AttributesContract')) {
                $this->attributesClass = $attributes;
                unset($this->attrs[$key]);
            }
        }
        $this->attrs = array_values($this->attrs);
        $this->validate();
    }

    public function attributes(array $attributes)
    {
        $this->attributesClass->setAttributes($attributes);
        $this->optional_attrs = (string)$this->attributesClass;
    }
}
