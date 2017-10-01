<?php

namespace carfaker\provider;

use carfaker\traits\RepositoryTrait;

/**
 * Class Car
 * @package carfaker\provider
 */
class Car extends Base
{
    use RepositoryTrait;

    /**
     * @example 'Mercedes s500'
     */
    public function car()
    {
        $brandNames = array_keys(static::$brandModelNames);
        $brand = static::randomElement($brandNames);

        $model = static::randomElementByKey(static::$brandModelNames, $brand);

        return $brand . ' ' . $model;
    }

    /**
     * @example 'Audi'
     */
    public static function brand()
    {
        $brandNames = array_keys(static::$brandModelNames);

        return static::randomElement($brandNames);
    }
}
