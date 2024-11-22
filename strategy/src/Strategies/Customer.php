<?php
namespace Strategy\Strategies;

readonly class Customer
{
    public function __construct(
        public string $name,
        public string $email,
        public string $document,
        public string $phone,
        public string $address
    ) {}

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'document' => $this->document,
            'phone' => $this->phone,
            'address' => $this->address
        ];
    }
}