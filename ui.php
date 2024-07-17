<?php
require 'connDB.php';
require 'todo.php';

$db = cannDB::connect();
$todo = new todo($db);

if (!empty($_POST['name']) && !empty($_POST['lastName'])) {
    $todo->add($_POST['name'], $_POST['lastName']);
}

header("Location: index.php");
exit();
?>
