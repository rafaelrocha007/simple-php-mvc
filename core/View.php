<?php

namespace Core;

class View
{
    public static function render($view)
    {
        $file = "../app/views/$view";

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }
}
