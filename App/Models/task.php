<?php

require_once "../app/Core/Database.php";

class taskModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function createTask(int $UserID, string $Title, string $Deadline, string $Status)
    {
        $Title = htmlspecialchars($Title);

        if (strtotime($Deadline) === false) {
            return 0;
        }
    
        $query = $this->db->dbconn->prepare("INSERT INTO Tasks (UserID, Title, Deadline, Status) VALUES (:UserID, :Title, :Deadline, :Status)");
    
        $query->execute([
            ':UserID' => $UserID,
            ':Title' => $Title,
            ':Deadline' => $Deadline,
            ':Status' => $Status
        ]);
        
        return $query->rowCount();
    }
    

    public function getAllTasksByUser(int $taskID)
    {
        $quary = $this->db->dbconn->prepare("SELECT * FROM Tasks WHERE UserID = ?");
        $quary->execute([$taskID]);
        return $quary->fetchAll();
    }

    public function getTaskByID(int $taskID)
    {
        $quary = $this->db->dbconn->prepare("SELECT * FROM Tasks WHERE TaskID = ?");
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
