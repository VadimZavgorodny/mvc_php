<?php

class Db
{
    public static function getConnection() {
        try {
            $paramsPath = ROOT . '/config/db_params.php';
            $dbParams = include($paramsPath);

            return new PDO("mysql:host={$dbParams['host']}; dbname={$dbParams['dbName']}",
                $dbParams['user'], $dbParams['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $ex) {
            die(json_encode(['outcome' => false, 'message' => 'Unable to connect']));
        }
    }
}