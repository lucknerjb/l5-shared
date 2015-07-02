<?php

namespace Lucknerjb\Shared;

class MyLog
{
    public static function log($content = '')
    {
        echo "Priting {$content} from the MyLog facility";
    }
}