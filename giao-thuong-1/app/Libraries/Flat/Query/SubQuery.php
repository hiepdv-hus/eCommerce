<?php

namespace App\Libraries\Flat\Query;

/**
 * Class Query
 * @package api\Lib\Model\Query
 */
class SubQuery
{
    /**
     * @var string $_query
     */
    private $_query;
    /**
     * @var string $_alias
     */
    private $_alias;

    public function __construct($query, $alias = null)
    {
        $this->_query = $query;
        $this->_alias = $alias;
    }

    public function __toString()
    {
        $query = '(' . $this->_query . ')';
        if (!empty($this->_alias)) {
            $query .= ' '.$this->_alias;
        }
        return $query;
    }
}
