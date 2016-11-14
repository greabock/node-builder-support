<?php

namespace Greabock\NodeBuilder\Support\Contracts;

interface NodeFieldInterface
{
    /**
     * @return callable|null
     */
    public function getMethod();

    /**
     * @return array|string[]
     */
    public function getMiddleware():array;

    public function getValue();

    public function getFieldName();
}