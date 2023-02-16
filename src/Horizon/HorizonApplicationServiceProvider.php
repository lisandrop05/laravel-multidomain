<?php

namespace Lisandrop05\Multidomain\Horizon;

use Lisandrop05\Multidomain\Horizon\Console\HorizonCommand;
use Lisandrop05\Multidomain\Horizon\Console\SupervisorCommand;
use Lisandrop05\Multidomain\Horizon\Console\TimeoutCommand;
use Laravel\Horizon\Console\HorizonCommand as BaseHorizonCommand;
use Laravel\Horizon\Console\SupervisorCommand as BaseSupervisorCommand;
use Laravel\Horizon\Console\TimeoutCommand as BaseTimeoutCommand;
use Laravel\Horizon\HorizonApplicationServiceProvider as BaseHorizonApplicationServiceProvider;

/**
 * Class HorizonApplicationServiceProvider
 *
 * @package Lisandrop05\Multidomain\Horizon
 */
class HorizonApplicationServiceProvider extends BaseHorizonApplicationServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->bind(BaseSupervisorCommand::class, SupervisorCommand::class);
        $this->app->bind(BaseHorizonCommand::class, HorizonCommand::class);
        $this->app->bind(BaseTimeoutCommand::class, TimeoutCommand::class);
    }
}
