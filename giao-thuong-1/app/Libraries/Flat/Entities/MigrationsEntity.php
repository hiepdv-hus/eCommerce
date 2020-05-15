<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query migration($prefix=null)
 * @method static Query batch($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class MigrationsEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'migrations.id';
    const migration = 'migrations.migration';
    const batch = 'migrations.batch';
    const primary_key = 'migrations.id';
    const table = 'migrations';
    const table_alias = 'migrations';
    /**
     * Schema
     */
     protected $schema = ['id','migration','batch'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','migration','batch'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \varchar(255) $migration
    */
    public $migration;
    /**
    * @var \int(11) $batch
    */
    public $batch;
    
    /**
     * Get id
     * @return int
     */
    public function getPrimaryKey()
    {
        return 'id';
    }
    
    /**
     * Get id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}