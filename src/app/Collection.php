<?php

namespace App;

class Collection implements \IteratorAggregate
{
    public function __construct(private readonly array $items)
    {
    }
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->items);
    }
}