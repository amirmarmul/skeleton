<?php

namespace Kcdev\Facades\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kcdev\Skeleton\SkeletonClass
 */
class SkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
