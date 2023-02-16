<?php

namespace Lisandrop05\Multidomain\Horizon;

use Laravel\Horizon\WorkerCommandString as BaseWorkerCommandString;
use Laravel\Horizon\SupervisorOptions;

/**
 * Class WorkerCommandString
 *
 * @package Lisandrop05\Multidomain\Horizon
 */
class WorkerCommandString extends BaseWorkerCommandString
{
    /**
     * Get the additional option string for the command.
     *
     * @param  SupervisorOptions  $options
     * @return string
     */
    public static function toOptionsString(SupervisorOptions $options)
    {
        return QueueCommandString::toWorkerOptionsString($options);
    }
}
