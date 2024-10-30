<?php

namespace FactoryMethod\Models;

use FactoryMethod\Core\Factory;

interface Transport
{
    public static function factory(): Transport|array;
}