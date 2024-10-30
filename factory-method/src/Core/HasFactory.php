<?php

namespace FactoryMethod\Core;

trait HasFactory
{
    /**
     * Get a new factory instance for the model.
     */
    public static function factory()
    {
        $factoryClassName = self::getFactoryClassName();
        return (new $factoryClassName);
    }

    public static function getFactoryClassName(): string
    {
        $classFullName = explode('\\', get_called_class());
        $className = end($classFullName);

        return "FactoryMethod\\Factories\\{$className}Factory";
    }
}
