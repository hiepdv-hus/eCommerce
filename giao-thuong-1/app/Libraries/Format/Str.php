<?php

namespace App\Libraries\Format;

final class Str extends \Illuminate\Support\Str
{
    /**
     * Check if a string is empty
     * @param $string
     * @return bool
     */
    public static function isEmpty($string)
    {
        if(is_null($string))
        {
            return true;
        }

        $string = trim($string);
        return empty($string);
    }

    public static function valueOrDefault($string, $default = null)
    {
        $value = !empty($string) ? $string : $default;
        return (string)$value;
    }

    /**
     * Trim string|array
     * @param $str
     * @param string $characterSet
     * @return string
     */
    public static function trim($str, $characterSet = '')
    {
        if(is_array($str))
        {
            foreach($str as &$_str)
            {
                $_str = self::trim($_str, $characterSet);
            }
        }
        else if(is_string($str))
        {
            $str = trim($str, $characterSet.' ');
        }

        return $str;
    }

    /**
     * Time to now
     * @return false|string
     */
    public static function timeNow()
    {
        return date('Y-m-d H:i:s');
    }

    public static function firstDayOfMonth()
    {
        $firstDayUTS = mktime (0, 0, 0, date("m"), 1, date("Y"));
        $firstDay = date("Y-m-d", $firstDayUTS);
        return $firstDay;
    }

    public static function lastDayOfMonth()
    {
        $lastDayUTS = mktime (0, 0, 0, date("m"), date('t'), date("Y"));
        $lastDay = date("Y-m-d", $lastDayUTS);
        return $lastDay;
    }
}
