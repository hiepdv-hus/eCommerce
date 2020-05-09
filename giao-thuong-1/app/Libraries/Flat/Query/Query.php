<?php

namespace App\Libraries\Flat\Query;

use App\Libraries\Flat\Database\DbContext;

/**
 * Class Query
 * @package api\Lib\Model\Query
 */
class Query
{
    /**
     * @var Field $field
     */
    private $field;
    /**
     * @var string $operator
     */
    private $operator;
    /**
     * @var mixed $value
     */
    private $value;
    /**
     * @var Query $nested
     */
    private $nested;
    /**
     * @var array $queries
     */
    private $queries = [];

    /**
     * Query constructor.
     * @param string $entityType
     */
    public function __construct($entityType)
    {
        $this->field = new Field($entityType);
    }

    /**
     * Combine with conjunction AND
     * @param Query $query
     * @return Query
     */
    public function and(Query $query)
    {
        $this->queries[] = 'AND('.$query->toString().')';
        return $this;
    }

    /**
     * @param Query $query
     * @return Query
     */
    public function or(Query $query)
    {
        $this->queries[] = 'OR('.$query->toString().')';
        return $this;
    }

    /**
     * Set operator
     * @param $operator
     * @return $this
     */
    public function operator($operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Set value
     * @param $value
     * @param bool $forceQuote
     * @return $this
     */
    public function value($value, $forceQuote = false)
    {
        if($this->queries)
        {
            $query = new static($this->field->getEntityType());
            $query->getField()->setName($this->field->getName())->setMask($this->field->getMask());
            return $query->operator($this->operator)->value($value);
        }

        if($value instanceof Query)
        {
            $this->value = $value->field->getMask();
        }
        else{
            $this->value = $this->quote($value, $forceQuote);
        }

        $this->queries[] = $this->field->getMask().' '.$this->operator.' '.$this->value;
        return $this;
    }

    /**
     * Set value without checking for quote
     * @param $value
     * @return $this
     */
    public function valueNotQuote($value)
    {
        $this->value = $value;
        $this->queries[] = $this->field->getMask().' '.$this->operator.' '.$this->value;
        return $this;
    }

    /**
     * COALESCE Helper
     * @param int $default
     * @return Query
     */
    public function coalesce($default = 0)
    {
        $this->getField()->setMask(
            "COALESCE({$this->getField()->getMask()}, $default)"
        );
        return $this;
    }

    /**
     * AES_DECRYPT Helper
     * @return Query
     */
    public function aes_decrypt()
    {
        $this->getField()->setMask(
            "AES_DECRYPT({$this->getField()->getName()}, '".DbContext::getKeyDecode()."')"
        );
        return $this;
    }

    /**
     * AES_ENCRYPT Helper
     * @return $this
     */
    public function aes_encrypt()
    {
        $this->getField()->setMask(
            "AES_ENCRYPT({$this->getField()->getName()}, '".DbContext::getKeyDecode()."')"
        );
        return $this;
    }

    /**
     * SUM Helper
     * @return $this
     */
    public function sum()
    {
        $this->getField()->setMask("SUM({$this->getField()->getMask()})");
        return $this;
    }

    /**
     * COUNT helper
     * @return $this
     */
    public function count()
    {
        $this->getField()->setMask("COUNT({$this->getField()->getName()})");
        return $this;
    }

    /**
     * YEAR helper
     * @return $this
     */
    public function year()
    {
        $this->getField()->setMask("YEAR({$this->getField()->getMask()})");
        return $this;
    }

    /**
     * MONTH helper
     * @return $this
     */
    public function month()
    {
        $this->getField()->setMask("MONTH({$this->getField()->getMask()})");
        return $this;
    }

    /**
     * AS helper
     * @param $alias
     * @return Query
     */
    public function as__($alias)
    {
        $this->getField()->setMask("{$this->getField()->getMask()} AS `$alias`");
        return $this;
    }

    /**
     * ON helper
     * @param $condition
     * @return Query
     */
    public function on($condition)
    {
        $this->getField()->setMask("{$this->getField()->getMask()} ON $condition");
        return $this;
    }

    /**
     * Set equal condition
     * @param $value
     * @return Query
     */
    public function equal($value)
    {
        return $this->operator('=')->value($value);
    }

    /**
     * Set equal condition
     * @param $value
     * @return Query
     */
    public function equalString($value)
    {
        return $this->operator('=')->value($value, true);
    }

    /**
     * @param $value
     * @return Query
     */
    public function notEqual($value)
    {
        return $this->operator('<>')->value($value);
    }

    /**
     * Set equal condition
     * @param $field
     * @return Query
     */
    public function equalField($field)
    {
        return $this->operator('=')->valueNotQuote($field);
    }

    /**
     * @param $value
     * @return Query
     */
    public function greater($value)
    {
        return $this->operator('>')->value($value);
    }

    /**
     * @param $value
     * @return Query
     */
    public function greaterOrEqual($value)
    {
        return $this->operator('>=')->value($value);
    }

    /**
     * @param $value
     * @return Query
     */
    public function less($value)
    {
        return $this->operator('<')->value($value);
    }

    /**
     * @param $value
     * @return Query
     */
    public function lessOrEqual($value)
    {
        return $this->operator('<=')->value($value);
    }

    /**
     * @param array $values
     * @return Query
     */
    public function in(array $values)
    {
        return $this->operator('IN')->valueNotQuote('('.join(',', $values).')');
    }

    /**
     * @param array string $values
     * @return Query
     */
    public function inStr(array $values)
    {
        $string = '';
        foreach ($values as $value){
            $string .= "'".$value."',";
        }
        $string = rtrim($string,",");
        return $this->operator('IN')->valueNotQuote('('.$string.')');
    }

    /**
     * @param array $values
     * @return Query
     */
    public function notIn(array $values)
    {
        return $this->operator('NOT IN')->valueNotQuote('('.join(',', $values).')');
    }

    /**
     * @param array string $values
     * @return Query
     */
    public function notInStr(array $values)
    {
        $string = '';
        foreach ($values as $value){
            $string .= "'".$value."',";
        }
        $string = rtrim($string,",");
        return $this->operator('NOT IN')->valueNotQuote('('.$string.')');
    }

    /**
     * @param $value
     * @return Query
     */
    public function contain($value)
    {
        return $this->operator('LIKE')->value('%'.$value.'%');
    }

    /**
     * @param $value
     * @return Query
     */
    public function startWith($value)
    {
        return $this->operator('LIKE')->value($value.'%');
    }

    /**
     * @param $value
     * @return Query
     */
    public function endWidth($value)
    {
        return $this->operator('LIKE')->value('%'.$value);
    }

    /**
     * @return Query
     */
    public function isNull()
    {
        return $this->operator('')->valueNotQuote('IS NULL');
    }

    /**
     * @return Query
     */
    public function isNotNull()
    {
        return $this->operator('')->valueNotQuote('IS NOT NULL');
    }

    /**
     * @return Query
     */
    public function isEmpty()
    {
        return $this->isNull()->or($this->equal(''));
    }

    /**
     * @return Query
     */
    public function isNotEmpty()
    {
        return $this->isNotNull()->and($this->notEqual(''));
    }

    /**
     * @param $other
     * @return Query
     */
    public function plus($other)
    {
        return $this->operator('+')->value($other);
    }

    /**
     * @param $other
     * @return Query
     */
    public function minus($other)
    {
        return $this->operator('-')->value($other);
    }

    /**
     * @param int $timeFrom
     * @param int $timeTo
     * @return Query
     */
    public function between($timeFrom, $timeTo) {
        $field = $this->getField()->getMask();
        $this->getField()->setMask(
            "DATE_FORMAT({$field}, '%Y-%m-%d') BETWEEN ".date('Y-m-d', $timeFrom)." AND ". date('Y-m-d', $timeTo)
        );
        return $this;
    }

    /**
     * @param string $format
     * @return Query
     */
    public function dateFormat($format) {
        $field = $this->getField()->getMask();
        $this->getField()->setMask("DATE_FORMAT({$field}, '{$format}')");
        return $this;
    }

    /**
     * Find in set
     * @param $value
     * @return $this
     */
    public function findInSetWith($value) {
        $field = $this->getField()->getMask();
        $this->getField()->setMask("FIND_IN_SET({$this->quote($value, true)}, {$field})");
        return $this;
    }

    /**
     * Quote value if is string
     * @param $input
     * @param bool $forceQuote
     * @return string
     */
    public function quote($input, $forceQuote = false)
    {
        if((is_string($input) && $forceQuote) || (is_string($input) && !is_numeric($input)))
        {
            $input = DbContext::instance()->quote($input);
        }
        return $input;
    }

    /**
     * Escape string
     * @param $input
     * @return array|mixed
     */
    public function escape($input) {
        if(is_array($input))
            return array_map(__METHOD__, $input);

        if(!empty($input) && is_string($input)) {
            return str_replace(
                ['\\', "\0", "\n", "\r", "'", '"', "\x1a"],
                ['\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'],
                $input
            );
        }

        return $input;
    }

    /**
     * Set nested query
     * @param Query $query
     */
    public function nest(Query $query)
    {
        if(!$this->nested) {
            $this->nested = $query;
        }
        else{
            $this->nested->nest(($query));
        }
    }

    /**
     * Get nested query
     * @return Query
     */
    public function getNested()
    {
        if($this->nested)
        {
            $nested = $this->nested->getNested();
            if($nested)
            {
                return $nested->getNested();
            }
            return $this->nested;
        }
        return $this;
    }

    /**
     * Get field object
     * @return Field
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Get query string
     * @return string
     */
    public function toString()
    {
        $query = implode(' ', $this->queries);
        if(!$query)
        {
            $query = $this->field->getMask();
        }
        return $query;
    }

    /**
     * Magic to string - call when object being treated as a string
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

    public function __call($name, $arguments)
    {
        $this->getField()->setMask("{$this->getField()->getMask()} `$name`");
        return $this;
    }
}
