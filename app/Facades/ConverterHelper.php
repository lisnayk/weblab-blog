<?php
/**
 * Created by PhpStorm.
 * User: Munspel
 * Date: 05.11.2019
 * Time: 16:27
 */

namespace App\Facades;

use App\Services\Converter;
use Illuminate\Support\Facades\Facade;

class ConverterHelper extends  Facade
{
    protected static function getFacadeAccessor() {
        return "converter";
    }
}
