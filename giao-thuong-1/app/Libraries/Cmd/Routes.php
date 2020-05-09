<?php

namespace App\Libraries\Cmd;

/**
 * Class Routes
 * @package App\Libraries\Cmd
 */
class Routes
{
    public static function get()
    {
        return [
            '--help' => [
                'execute' => Help::class.'@execute',
                'help' => 'Please execute syntax: <commandName> [arguments]',
            ],

            'scaffold:entity' => [
                'execute' => Scaffold::class.'@entity',
                'help' => 'Generate entity syntax: php scaffold:entity dbContext:[db_context] table:[table_name,..]'
            ]
        ];
    }
}