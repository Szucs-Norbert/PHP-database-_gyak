<?php

    include_once('config.php');

    class Mariadb{
        public static function connectDb() {
            global $db;
            $conn= new mysqli(
                $db['host']='localhost',
                $db['user']='booker',
                $db['pass']='titok',
                $db['name']='booker'

            ); 
            if ($conn->connect_error){
                error_log('Hiba! A kapcsolódás sikertelen');
            }
            $conn-> set_charset('utf-8');
            return $conn;
        }
    }