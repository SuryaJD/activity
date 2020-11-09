<?php

namespace Worthcoding\Activity;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Worthcoding\Activity\Skeleton\SkeletonClass
 */
class ActivityFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'activity';
    }
}
