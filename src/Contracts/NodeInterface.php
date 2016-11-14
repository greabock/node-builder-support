<?php

namespace Greabock\NodeBuilder\Support\Contracts;


interface NodeInterface
{
    public function getSetter();

    public function getMiddleWare():array;

    public function getFieldName():string;

    public function getStrategy():int;
}