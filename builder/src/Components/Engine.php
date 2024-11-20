<?php

namespace Builder\Components;

class Engine
{
    public function __construct(
        private int $power
    ) {}

    public function getPower(): int
    {
        return $this->power;
    }
}