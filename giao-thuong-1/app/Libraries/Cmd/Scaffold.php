<?php

namespace App\Libraries\Cmd;

use PDO;

/**
 * Class Scaffold
 * @package App\Libraries\Cmd
 */
class Scaffold extends Command
{
    /**
     * Generate entities
     * @param string $db_context
     * @param string $tables
     * @return string|null
     * @throws \Exception
     */
    public function entity($db_context = '', $tables = '')
    {
        // Get db context
        $this->getDbContext($db_context);

        // Get tables
        $tables = array_filter(explode(',', trim(preg_replace('/^table:/i', '', $tables), '[]')));

        if(!count($tables))
        {
            return null;
        }

        if($tables[0] == '@all')
        {
            $tables = $this->dbContext->getTables();
        }

        $counter = 0;
        foreach($tables as $table)
        {
            $tableAlias = trim($table, '_');
            $resource = $this->dbContext->prepare("DESCRIBE `{$table}`");
            $resource->execute();

            if($resource->rowCount() > 0)
            {
                $entityClassName = $this->getClassName($table) . 'Entity';
                $constants = <<<CONTENT
    
    /**
    * const - fields
    */
CONTENT;

                $methods = '';
                $primaryKey = '';
                $properties = '';
                $varbinarySet = [];
                $schema = [];
                $notNullAble = [];
                $default = [];
                while ($row = $resource->fetch(PDO::FETCH_ASSOC))
                {
                    $field = $row['Field'];
                    $type = $row['Type'];
                    $schema[] = $field;
                    !($row['Null'] == 'NO') or $notNullAble[] = $field;
                    empty($row['Default']) or $default[$field] = $row['Default'];

                    if($row['Key'] == 'PRI')
                    {
                        $primaryKey = $row['Field'];
                    }

                    if(preg_match('/^varbinary?.*/', $type))
                    {
                        $varbinarySet[] = "$tableAlias.$field";
                    }

                    $methods .= <<<CONTENT
 * @method static Query $field(\$prefix=null)\n
CONTENT;


                    $constants .= <<<CONTENT

    const $field = '$tableAlias.$field';
CONTENT;

                    $properties .= <<<CONTENT

    /**
    * @var \\$type $$field
    */
    public $$field;
CONTENT;


                }
                $resource = null;
                $methods .= <<<CONTENT
 * @method static Query primary_key(\$prefix=null)\n
CONTENT;

                $methods = trim($methods, "\n");
                $constants .= <<<CONTENT

    const primary_key = '$tableAlias.$primaryKey';
    const table = '$table';
    const table_alias = '$tableAlias';
CONTENT;

                if(!empty($varbinarySet))
                {
                    $varbinarySetString = implode(',', $varbinarySet);
                    $varbinarySet = <<<CONTENT

    /**
     * Set of fields with type of varbinary
     */
    const varbinary_set_of_fields = '$varbinarySetString';

CONTENT;

                }
                else{
                    $varbinarySet = '';
                }

                $schema = implode(',', array_map(function($i){
                    return '\''.$i.'\'';
                }, $schema));
                $schema = <<<CONTENT
    /**
     * Schema
     */
     protected \$schema = [$schema];
CONTENT;

                $notNullAble = implode(',', array_map(function($i){
                    return '\''.$i.'\'';
                }, $notNullAble));
                $notNullAble = <<<CONTENT
    /**
     * List of not nullable fields
     */
     protected \$notNullAble = [$notNullAble];
CONTENT;

                $defaults = [];
                foreach ($default as $dk => $dv)
                {
                    preg_match("/.*?\'(.*?)\'/", $dv, $matched);
                    !$matched or $defaults[$dk] = '\''.$dk.'\'=>'. (is_numeric($matched[1]) ? $matched[1] : $this->dbContext->quote($matched[1]));
                }

                $defaults = implode(',', $defaults);
                $defaults = <<<CONTENT
    /**
     * List of fields withd efault value
     */
     protected \$default = [$defaults];
CONTENT;

                $content =  <<<CONTENT
<?php

namespace App\\Libraries\\Flat\\Entities;

use App\\Libraries\\Flat\\Entity;
use App\\Libraries\\Flat\\Query\\Query;

/**
$methods
 */
class $entityClassName extends Entity
{
CONTENT;
                $content .= $constants.$varbinarySet ."\n". $schema . "\n" . $notNullAble . "\n" . $defaults ."\n". $properties ."\n";
                $content .= <<<CONTENT
    
    /**
     * Get id
     * @return int
     */
    public function getPrimaryKey()
    {
        return '$primaryKey';
    }
    
    /**
     * Get id
     * @return int
     */
    public function getId()
    {
        return \$this->{$primaryKey};
    }
}
CONTENT;

                $entitiesPath = APP_PATH . '/Libraries/Flat/Entities/';
                if(!file_exists($entitiesPath))
                {
                    mkdir($entitiesPath);
                }
                // Create entity file
                $entityFile = fopen($entitiesPath . $entityClassName . '.php', 'w');
                fwrite($entityFile, $content);
                fclose($entityFile);

                $counter++;
            }
        }

        $this->dbContext = null;

        return "$counter entities were generated!!!";
    }
}