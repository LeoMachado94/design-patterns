<?php

if (!function_exists('fake')) {
    function fake(string $locale = null)
    {
        return Faker\Factory::create($locale);
    }
}