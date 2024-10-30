<?php

namespace FactoryMethod\Models;

use FactoryMethod\Core\HasFactory;

class User
{
    use HasFactory;

    public function __construct(
        public string $name,
        public int $age,
        public ?string $email = null,
        public ?string $phone = null,
        public ?string $country = null,
    ) {

    }
}