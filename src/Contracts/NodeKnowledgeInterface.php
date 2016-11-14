<?php

namespace Greabock\NodeBuilder\Support\Contracts;

interface NodeKnowledgeInterface
{
    const STRATEGY_DIRECT = 0;
    const STRATEGY_METHOD = 1;
    const STRATEGY_REFLECTION = 2;

    /**
     * @param string $type
     * @param array  $data
     *
     * @return array
     */
    public function compareFields(string $type, array $data):array;
}