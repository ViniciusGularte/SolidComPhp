<?php
namespace Solid\Html;

interface AttributesContract
{
    public function __toString(): string;
    public function setAttributes(array $attributes);
}
