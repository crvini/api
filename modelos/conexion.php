<?php

class Conexion
{
    public function conectar()
    {
        $link = new PDO(
            "mysql:host=localhost;dbname=my_db_disteval",
            "root",
            "1234",
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            )
        );
        return $link;
    }
}
