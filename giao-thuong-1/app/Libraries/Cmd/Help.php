<?php

namespace App\Libraries\Cmd;

/**
 * Class Help
 * @package App\Libraries\Cmd
 */
class Help extends Command
{
    public function execute()
    {
        if (! empty($this->arguments)) {
            throw new \RuntimeException('Too many arguments attempted to command [' . $this->name . ']');
        }

        echo $this->help, PHP_EOL;

        return 0;
    }
}