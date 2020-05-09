<?php

namespace App\Libraries\Cmd;

/**
 * Class Routes
 * @package App\Libraries\Cmd
 */
class Route extends Routes
{
    public static function get()
    {
        $routes = parent::get();
        $routes = array_merge($routes, [
            'create:controller' => [
                'execute' => File::class.'@createController',
                'help' => 'Syntax: php gen create:controller name'
            ],
            'create:model' => [
                'execute' => File::class.'@createModel',
                'help' => 'Syntax: php gen create:model name table_name'
            ],
            'create:input' => [
                'execute' => File::class.'@createInput',
                'help' => 'Syntax: php gen create:input name'
            ],
            'create:output' => [
                'execute' => File::class.'@createOutput',
                'help' => 'Syntax: php gen create:output name'
            ]
        ]);

        return $routes;
    }
}