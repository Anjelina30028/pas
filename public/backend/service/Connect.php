<?php

namespace services;
class Connect
{
    public static function getConnect()
    {
        $db = mysqli_connect('MySQL-8.4', 'root', '', 'pas', '3306');
        if(!$db)
        {
            echo 'connect error';
        }
        else
        {
            return $db;
        }
    }
}