<?php

require_once "../app/Core/Database.php";

class calendarModel {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }




    public function getAllTasksByUser(int $taskID)
    {
        $quary = $this->db->dbconn->prepare("SELECT * FROM Tasks WHERE UserID = ?");
        $quary->execute([$taskID]);
        return $quary->fetchAll();
    }





    public function calendarGetTasks(int $UserID) {
        $query = $this->db->dbconn->prepare("SELECT * FROM Tasks WHERE UserID = ?");
        $query->execute([$UserID]);
        $tasks = $query->fetchAll();

    
        $calendar = [];
    
        foreach ($tasks as $task) {
            $deadline = $task['Deadline'];
            if (!isset($calendar[$deadline])) {
                $calendar[$deadline] = [];
            }
            $calendar[$deadline][] = $task;
        }
    
        return $calendar;
    }
    
}