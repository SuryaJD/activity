<?php

namespace Worthcoding\Activity\Tests;

use Orchestra\Testbench\TestCase;
use Worthcoding\Activity\ActivityServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ActivityServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
