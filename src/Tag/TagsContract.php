<?php
namespace Solid\Html\Tag;

interface TagsContract
{
    public function validate();
    public function __toString() : string;
}
