<?php

class todo
{
    private $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function add($todoName, $todoLname)
    {
        $status = false;
        $sql = 'INSERT INTO `info` (name, lastName, status) values (:name, :lastName, :status)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':name', $todoName);
        $stmt->bindParam(':lastName', $todoLname);
        $stmt->bindParam(':status', $status, PDO::PARAM_BOOL);
        $stmt->execute();
    }

    public function get()
    {
        return $this->pdo->query("SELECT * FROM `info`")->fetchAll();
    }
}
