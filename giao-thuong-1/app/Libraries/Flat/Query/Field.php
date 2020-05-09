<?php

namespace App\Libraries\Flat\Query;

use App\Libraries\Flat\Database\DbContext;

/**
 * Class Field
 * @package api\Lib\Model\Query
 */
class Field
{
    /**
     * @var string $name
     */
    public $name;
    /**
     * @var string $mask
     */
    protected $mask;
    /**
     * @var string $entityType
     */
    protected $entityType;

    /**
     * Field constructor.
     * @param $entityType
     */
    public function __construct($entityType)
    {
        $this->entityType = $entityType;
    }

    /**
     * Set field name
     * @param $name
     * @return Field
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->mask = $this->name;
        if(defined($this->entityType.'::varbinary_set_of_fields'))
        {
            $varbinarySet = array_filter(explode(',', constant($this->entityType.'::varbinary_set_of_fields')));
            if(in_array($this->name, $varbinarySet))
            {
                $this->mask = "AES_DECRYPT({$this->mask}, '".DbContext::getKeyDecode()."')";
            }
        }

        return $this;
    }

    /**
     * Get field name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set field mask
     * @param $mask
     * @return Field
     */
    public function setMask($mask)
    {
        $this->mask = $mask;
        return $this;
    }

    /**
     * Get field mask
     * @return string
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Get entity type
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }
}
