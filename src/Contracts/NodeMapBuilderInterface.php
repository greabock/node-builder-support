<?php

namespace Greabock\NodeBuilder\Support\Contracts;

interface NodeMapBuilderInterface
{
    public function buildTree($type, array $data);
}