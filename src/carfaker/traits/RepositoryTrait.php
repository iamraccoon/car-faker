<?php

namespace carfaker\traits;

/**
 * Trait RepositoryTrait
 * @package carfaker\traits
 */
trait RepositoryTrait
{
    /**
     * @var array
     */
    protected static $brandModelNames = array(
        'Audi' => array(
            '100', 'A6', 'A7'
        ),
        'Mercedes' => array(
            'S600', 'G62'
        ),
        'Zaz' => array(
            'Tavria', '956'
        )
    );
}
