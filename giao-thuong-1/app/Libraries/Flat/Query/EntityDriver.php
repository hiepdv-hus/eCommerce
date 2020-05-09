<?php

namespace App\Libraries\Flat\Query;

use App\Libraries\Flat\Entity;

/**
 * Class EntityDriver
 * @package api\Lib\Model\Query
 */
class EntityDriver
{
    /**
     * @var Entity $entity
     */
    private $entity;

    /**
     * EntityDriver constructor.
     * @param Entity $entity
     */
    public function __construct(Entity $entity)
    {
        $this->entity = $entity;
    }

    /**
     * Set query object
     * @return Query
     */
    public function newQuery()
    {
        $query = new Query($this->entity->getClass());
        return $query;
    }

}
