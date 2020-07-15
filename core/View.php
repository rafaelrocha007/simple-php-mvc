<?php

namespace Core;

class View
{
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = "../app/views/$view";

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }

    public static function renderTemplate($template, $args = [])
    {
        static $twig = null;

        if ($twig === null) {
            $loader = new \Twig\Loader\FilesystemLoader('../app/views/');
            $twig = new \Twig\Environment($loader, [
                'cache' => dirname(__DIR__) . '/var/cache',
            ]);
        }

        echo $twig->render($template, $args);
    }
}
