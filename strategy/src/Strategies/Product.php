<?php
namespace Strategy\Strategies;

readonly class Product
{
    public function __construct(
        public int|string $id,
        public string $title
    ) {}

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title
        ];
    }
}