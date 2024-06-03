<?php

require_once "../app/Core/Database.php";

class taskModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function createTask(int $UserID, string $Title, string $description, string $Deadline, string $Status)
    {
        $Title = htmlspecialchars($Title);
        $description = htmlspecialchars($description);
        
        if (strtotime($Deadline) === false) {
            return 0;
        }
    
        $query = $this->db->dbconn->prepare("INSERT INTO Tasks (UserID, Title, description,  Deadline, Status) VALUES (:UserID, :Title, :description, :Deadline, :Status)");
        var_dump($query);
        $query->execute([
            ':UserID' => $UserID,
            ':Title' => $Title,
            ':description' => $description,
            ':Deadline' => $Deadline,
            ':Status' => $Status
        ]);
        var_dump($query);
    }
    

    public function getAllTasksByUser(int $taskID)
    {
        $quary = $this->db->dbconn->prepare("SELECT * FROM Tasks WHERE UserID = ?");
        $quary->execute([$taskID]);
        return $quary->fetchAll();
    }

    public function getTaskByID(int $taskID)
    {
        $quary = $this->db->dbconn->prepare("SELECT * FROM Tasks WHERE id = ?");
        $quary->execute([$taskID]);
        return $quary->fetch();
    }
    public function done(int $taskId, string $Status){
             $quary = $this->db->dbconn->prepare("UPDATE tasks SET Status = :Status WHERE id = :id");
            $quary->execute([':id' => $taskId, ':Status' => $Status]);
        }

        public function delete(int $taskId){
            $quary = $this->db->dbconn->prepare("DELETE FROM tasks WHERE id = :id");
           $quary->execute([':id' => $taskId]);
       }
    }
