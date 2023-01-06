<?php

namespace App\Helpers;

class AppHelper
{
    public static function bangla_slug($string)
    {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
