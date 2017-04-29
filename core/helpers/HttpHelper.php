<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.04.17
 * Time: 19:56
 */

namespace caseweb\helpers;


class HttpHelper
{

    public function __construct()
    {

    }

    public static function f() {
        return 'hello word';
    }

    public static function getSegments()
    {

        $currentUri = self::getCurrentUri();

        $segments = explode('?', $currentUri);
        $segments = trim($segments[0], '/');

        return explode('/', $segments);



    }

    public static function getCurrentUri()
    {

        return $_SERVER['REQUEST_URI'];

    }

}