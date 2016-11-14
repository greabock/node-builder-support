<?php

namespace Greabock\NodeBuilder\Support\Contracts;

interface NodeFillerInterface
{

    public function fillNode($node, $data);

    public function setBuilder(NodeMapBuilderInterface $builder);
}