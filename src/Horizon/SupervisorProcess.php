<?php

namespace Lisandrop05\Multidomain\Horizon;

use Lisandrop05\Multidomain\Horizon\MasterSupervisorCommands\AddSupervisor;
use Laravel\Horizon\Contracts\HorizonCommandQueue;
use Laravel\Horizon\MasterSupervisor;
use Laravel\Horizon\SupervisorProcess as BaseSupervisorProcess;

/**
 * Class SupervisorProcess
 *
 * @package Lisandrop05\Multidomain\Horizon
 */
class SupervisorProcess extends BaseSupervisorProcess
{
    /**
     * Re-provision this supervisor process based on the provisioning plan.
     *
     * @return void
     */
    protected function reprovision()
    {
        app(HorizonCommandQueue::class)->push(
            MasterSupervisor::commandQueue(),
            AddSupervisor::class,
            $this->options->toArray()
        );
    }
}
