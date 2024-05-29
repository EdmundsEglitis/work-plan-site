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

    public function getAllTasksByProject(int $projectID)
    {
        $query = $this->db->dbconn->prepare("SELECT * FROM Tasks WHERE ProjectID = ?");
        $query->execute([$projectID]);
        return $query->fetchAll();
    }
    public function getUsernameById($userID) {
        $query = $this->db->dbconn->prepare("SELECT Username FROM Users WHERE UserID = ?");
        $query->execute([$userID]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return ($result) ? $result['Username'] : null;
    }

    public function getAllProjects()
    {
        $query = $this->db->dbconn->prepare("SELECT * FROM Projects"); 
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


}
