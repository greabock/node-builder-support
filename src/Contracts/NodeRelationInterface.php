<?php

namespace Greabock\NodeBuilder\Support\Contracts;

interface NodeRelationInterface extends NodeFieldInterface
{
    const CAST_TO_ONE = 0;
    const CAST_TO_MANY = 1;

    public function getType():string ;

    public function castIs(int $cast):bool;
}