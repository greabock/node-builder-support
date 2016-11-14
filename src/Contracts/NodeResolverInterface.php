<?php

namespace Greabock\NodeBuilder\Support\Contracts;

interface NodeResolverInterface
{
    public function resolve($type, array $data);
}