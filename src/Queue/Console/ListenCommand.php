<?php

namespace Lisandrop05\Multidomain\Queue\Console;

use Lisandrop05\Multidomain\Queue\ListenerOptions;
use Illuminate\Queue\Console\ListenCommand as BaseListenCommand;

/**
 * Class ListenCommand
 *
 * @package Lisandrop05\Multidomain\Queue\Console
 */
class ListenCommand extends BaseListenCommand
{
    /**
     * Get the listener options for the command.
     *
     * @return ListenerOptions
     */
    protected function gatherOptions()
    {
        $backoff = (($this->hasOption('backoff')) ? $this->option('backoff') : $this->option('delay'));

        return new ListenerOptions(
            $this->option('name'),
            $this->option('env'),
            $backoff,
            $this->option('memory'),
            $this->option('timeout'),
            $this->option('sleep'),
            $this->option('tries'),
            $this->option('force'),
            $this->option('domain')
        );
    }

}
