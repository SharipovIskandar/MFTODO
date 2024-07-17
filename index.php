<?php

declare(strict_types=1);

require 'connDB.php';
require 'ui.php';



$db = connDB::connect();
$sql = 'INSERT INTO `info` (name, lastName) values (:name, :lastName)';
$stmt = $db->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':lastName', $lastName);
