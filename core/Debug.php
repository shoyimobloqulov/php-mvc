<?php


class Debug
{
    public static function dd($data, bool $exit = true): void
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';

        if ($exit) {
            exit;
        }
    }
}