<?php

namespace App\Libraries\Flat\Interfaces;

interface EntityInterface
{
    /**
     * Get table name
     * @return string
     */
    public function getTable();

    /**
     * Get table alias
     * @return string
     */
    public function getTableAlias();

    /**
     * Get primary key
     * @return string
     */
    public function getPrimaryKey();

    /**
     * Get id
     * @return int
     */
    public function getId();

    /**
     * Get table name
     * @return string
     */
    public static function table();

    /**
     * Get table alias
     * @return string
     */
    public static function tableAlias();

    /**
     * Get primary key
     * @return string
     */
    public static function primaryKey();
}