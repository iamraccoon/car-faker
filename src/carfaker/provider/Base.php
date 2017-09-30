<?php

namespace carfaker\provider;

/**
 * Class Base
 * @package carfaker\provider
 */
class Base extends \Faker\Provider\Base
{
    /**
     * Returns a random element from a passed array by key
     *
     * @param array $array
     * @param string $key
     * @return mixed
     */
    public static function randomElementByKey($array, $key)
    {
        if (!$array || empty($array[$key])) {
            return null;
        }

        return static::randomElement($array[$key]);
    }
}
