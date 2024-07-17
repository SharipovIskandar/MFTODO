<?php

class connDB {
    public static function connect(): PDO {
        return new PDO("mysql:host=localhost;dbname=mftodo", "root", "iskan2066");
    }
}