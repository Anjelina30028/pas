<?php

namespace src\service;

class Router
{
    public static $listPages = [];


    public static function myGet($url, $namePage)
    {
        self::$listPages[] =
            [
                'url' => $url,
                'namePage' => $namePage
            ];
    }

    public static function myPost($url, $class, $method)
    {
        self::$listPages[] =
            [
                'url' => $url,
                'class' => $class,
                'method' => $method
            ];
    }

    public static function getContent()
    {
        $rout = $_GET['rout'] ?? "";
        foreach (self::$listPages as $val) {
            if ($val['url'] === '/' . $rout) {
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $class = new $val['class'];
                    $method = $val['method'];
                    $class->$method();
                    break;
                } else {
                    require_once __DIR__ . '/../../frontend/view/' . $val['namePage'] . '.php';
                    die();
                }
            }
        }
        require_once __DIR__ . '/../../frontend/view/error/404.php';
        die();
    }
}
