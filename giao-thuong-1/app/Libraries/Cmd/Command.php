<?php

namespace App\Libraries\Cmd;

/**
 * Class Command
 * @package App\Libraries\Cmd
 */
abstract class Command
{
    protected $name;
    protected $help;

    /**
     * @var DbContext $dbContext
     */
    protected $dbContext;

    public function __construct($name, $help = '')
    {
        $this->name = $name;
        $this->help = $help;
    }

    /**
     * Get class name
     * @param $name
     * @return string
     */
    protected function getClassName($name)
    {
        $className = array_filter(explode('_', trim($name, '_')));
        $className = array_map('ucfirst', $className);
        return join('', $className);
    }

    /**
     * Get db context
     * @param $db_context
     * @throws \Exception
     */
    protected function getDbContext($db_context)
    {
        $context = DbContext::parseDbContext($db_context);

        $this->dbContext = new DbContext(
            sprintf('mysql:host=%s;dbname=%s'.(!empty($context['port']) ? ';port:'.$context['port'] : ''), $context['host'], $context['dbname']),
            $context['user'],
            $context['pass']
        );
    }
}