<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Request;

class Helper
{
    public static function setActive($path, $active = 'active') {
        return  Str::contains(Request::path(), $path) ? $active : '';
    }
}