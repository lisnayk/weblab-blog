<?php
/**
 * Created by PhpStorm.
 * User: Munspel
 * Date: 05.11.2019
 * Time: 16:26
 */

namespace App\Services;


class ConverterNew
{
    public function toUpper($str)
    {
        return strtoupper($str)  . " - XXX";
    }

}
